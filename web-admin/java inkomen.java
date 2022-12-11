package com.example.deden.appkantordinas;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.net.ConnectivityManager;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.RatingBar;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.example.deden.appkantordinas.Koneksi.Server;
import com.example.deden.appkantordinas.app.AppController;

import org.json.JSONException;
import org.json.JSONObject;

import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.HashMap;
import java.util.Map;

public class BuatKomenActivity extends AppCompatActivity {

    ProgressDialog pDialog;
    EditText judul_komen, isi_komen, id_user, idlokasih;
    TextView Submit, nama_user;
    ConnectivityManager conMgr;
    int success;

    private String url = Server.URL + "inkomen.php";
    private static final String TAG = BuatKomenActivity.class.getSimpleName();

    private static final String TAG_SUCCESS = "success";
    private static final String TAG_MESSAGE = "message";

    String tag_json_obj = "json_obj_req";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_buat_komen);

        conMgr = (ConnectivityManager) getSystemService(Context.CONNECTIVITY_SERVICE);
        {
            if (conMgr.getActiveNetworkInfo() != null
                    && conMgr.getActiveNetworkInfo().isAvailable()
                    && conMgr.getActiveNetworkInfo().isConnected()) {
            } else {
                Toast.makeText(getApplicationContext(), "No Internet Connection",
                        Toast.LENGTH_LONG).show();
            }
        }

        isi_komen = (EditText) findViewById(R.id.isiInput);
        judul_komen = (EditText) findViewById(R.id.jdlInput);
        nama_user = (TextView) findViewById(R.id.nmUsers);
        idlokasih = (EditText) findViewById(R.id.idl);
        id_user = (EditText) findViewById(R.id.usId);
//        tgl = (EditText) findViewById(R.id.tgl);
//        ratingBr = (RatingBar)findViewById(R.id.ratingBr);

        SharedPreferences sharedPreferences = getSharedPreferences(Server.SHARED_PREF_NAME, Context.MODE_PRIVATE);

        String id = sharedPreferences.getString(Server.TAG_ID,"not available");

        id_user.setText(id);
        //tgl.setText(getCurrentDate());

        Submit = (TextView)findViewById(R.id.btnInsert);

        Submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                String id = id_user.getText().toString();
                String idlokasi = idlokasih.getText().toString();
                String judul = judul_komen.getText().toString();
                String isi = isi_komen.getText().toString();
//                String rating = rate.getText().toString();
//                String dibuat = tgl.getText().toString();
//                String rating = String.valueOf(ratingBr.getRating());


                if (conMgr.getActiveNetworkInfo() != null
                        && conMgr.getActiveNetworkInfo().isAvailable()
                        && conMgr.getActiveNetworkInfo().isConnected()) {
                    checkInput(id,idlokasi,judul, isi /*rating, dibuat*/);
                    Intent i = new Intent(BuatKomenActivity.this, KomenActivity.class);
                    finish();
                   // startActivity(i);

                } else {
                    Toast.makeText(getApplicationContext(), "No Internet Connection", Toast.LENGTH_SHORT).show();

                }
            }
        });

        Intent ini = getIntent();
        String idlokasiInsert = ini.getExtras().getString("selected_idlokasi");
        idlokasih.setText(idlokasiInsert);

    }

    private void checkInput(final String id, final String idlokasi,final String judul, final String isi/*, final String rating, final String dibuat*/) {
        pDialog = new ProgressDialog(this);
        pDialog.setCancelable(false);
        pDialog.setMessage("Submitting ...");
        showDialog();

        StringRequest strReq = new StringRequest(Request.Method.POST, url, new Response.Listener<String>() {

            @Override
            public void onResponse(String response) {
                Log.e(TAG, "Input Response: " + response.toString());
                hideDialog();

                try {
                    JSONObject jObj = new JSONObject(response);
                    success = jObj.getInt(TAG_SUCCESS);

                    // Check for error node in json
                    if (success == 1) {

                        Log.e("Successfully Submit!", jObj.toString());

                        Toast.makeText(getApplicationContext(),
                                jObj.getString(TAG_MESSAGE), Toast.LENGTH_LONG).show();

                        id_user.setText("");
                        idlokasih.setText("");
                        judul_komen.setText("");
                        isi_komen.setText("");
//                        rate.setText("");
//                        tgl.setText("");

                    } else {
                        Toast.makeText(getApplicationContext(),
                                jObj.getString(TAG_MESSAGE), Toast.LENGTH_LONG).show();

                    }
                } catch (JSONException e) {
                    // JSON error
                    e.printStackTrace();
                }

            }
        }, new Response.ErrorListener() {

            @Override
            public void onErrorResponse(VolleyError error) {
                Log.e(TAG, "Input Error: " + error.getMessage());
                Toast.makeText(getApplicationContext(),
                        error.getMessage(), Toast.LENGTH_LONG).show();

                hideDialog();

            }
        }) {
            @Override
            protected Map<String, String> getParams() {
                // Posting parameters to register url
                Map<String, String> params = new HashMap<String, String>();
                params.put("id", id);
                params.put("idlokasi", idlokasi);
                params.put("judul", judul);
                params.put("isi", isi);
//                params.put("rating", rating);
//                params.put("dibuat", dibuat);

                return params;
            }



        };

        // Adding request to request queue
        AppController.getInstance().addToRequestQueue(strReq, tag_json_obj);
    }

    private void showDialog() {
        if (!pDialog.isShowing())
            pDialog.show();
    }

    private void hideDialog() {
        if (pDialog.isShowing())
            pDialog.dismiss();
    }
    private String getCurrentDate() {
        Calendar c = Calendar.getInstance();
        SimpleDateFormat frmt = new SimpleDateFormat("dd-MM-yyyy");
        String dateString = frmt.format(c.getTime());
        return dateString;
    }
}
