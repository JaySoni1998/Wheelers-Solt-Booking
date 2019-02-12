package com.example.jayso.wheelersslotbooking;

import android.app.AlertDialog;
import android.app.Dialog;
import android.app.TimePickerDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Color;
import android.graphics.drawable.ColorDrawable;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Gravity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.view.WindowManager;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.CompoundButton;
import android.widget.LinearLayout;
import android.widget.PopupWindow;
import android.widget.TextView;
import android.widget.TimePicker;
import android.widget.Toast;

import java.util.Calendar;

public class Booking2Activity extends AppCompatActivity implements AdapterView.OnItemSelectedListener {

    //String[] booking_slot = {"01", "02", "03"};
    Dialog myDialog;
    Button btn_reg_vehicle, btn_other_vehicle, btn_popup_close;
    PopupWindow popupWindow;
    LinearLayout linearLayoutBooking;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_booking2);

        hideSoftKeyboard();

        final TextView starttime = findViewById(R.id.start_time_picker);

        starttime.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Calendar calTime = Calendar.getInstance();
                int hour = calTime.get(Calendar.HOUR_OF_DAY);
                int minute = calTime.get(Calendar.MINUTE);

                TimePickerDialog mTimePicker;
                mTimePicker = new TimePickerDialog(Booking2Activity.this, new TimePickerDialog.OnTimeSetListener() {
                    @Override
                    public void onTimeSet(TimePicker timePicker, int selectedHour, int selectedMiniute) {

                        starttime.setText(selectedHour + ":" + selectedMiniute);
                        Toast.makeText(getApplicationContext(), selectedHour + "  " + selectedMiniute, Toast.LENGTH_SHORT).show();
                    }
                }, hour, minute, false);
                mTimePicker.setTitle("Select Time");
                mTimePicker.show();
            }
        });

        final TextView endtime = findViewById(R.id.end_time_picker);

        endtime.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Calendar calTime = Calendar.getInstance();
                int hour = calTime.get(Calendar.HOUR_OF_DAY);
                int minute = calTime.get(Calendar.MINUTE);

                TimePickerDialog mTimePicker;
                mTimePicker = new TimePickerDialog(Booking2Activity.this, new TimePickerDialog.OnTimeSetListener() {
                    @Override
                    public void onTimeSet(TimePicker timePicker, int selectedHour, int selectedMiniute) {

                        endtime.setText(selectedHour + ":" + selectedMiniute);
                        Toast.makeText(getApplicationContext(), selectedHour + "  " + selectedMiniute, Toast.LENGTH_SHORT).show();
                    }
                }, hour, minute, false);
                mTimePicker.setTitle("Select Time");
                mTimePicker.show();
            }
        });

        //dialog_popup
        myDialog = new Dialog(this);

        Button btnback = findViewById(R.id.btn_back);
        btnback.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                onBackPressed();
            }
        });

        Button btn_cancle = findViewById(R.id.btn_cancle);
        btn_cancle.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                AlertDialog.Builder myAlertDialog = new AlertDialog.Builder(Booking2Activity.this);
                myAlertDialog.setTitle("Are you sure?");
                myAlertDialog.setMessage("Would you like to cancel the booking?");
                myAlertDialog.setPositiveButton("Yes", new DialogInterface.OnClickListener() {
                    public void onClick(DialogInterface arg0, int arg1) {
                        Intent it = new Intent(Booking2Activity.this, MapActivity.class);
                        startActivity(it);
                        finish();
                    }
                });

                myAlertDialog.setNegativeButton("Cancel", new DialogInterface.OnClickListener() {
                    public void onClick(DialogInterface arg0, int arg1) {

                    }
                });

                myAlertDialog.show();
            }
        });

        Button btn_done = findViewById(R.id.btn_done);
        btn_done.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                AlertDialog alertDialog = new AlertDialog.Builder(Booking2Activity.this).create();
                alertDialog.setTitle("Infomation");
                alertDialog.setMessage("Booking Successfully!");
                alertDialog.setButton(AlertDialog.BUTTON_NEUTRAL, "OK",
                        new DialogInterface.OnClickListener() {
                            public void onClick(DialogInterface dialog, int which) {
                                dialog.dismiss();
                                Intent it = new Intent(Booking2Activity.this, MapActivity.class);
                                startActivity(it);
                                finish();
                            }
                        });
                alertDialog.show();

            }
        });

    }

    public void ShowPopupRegi(View v) {
        TextView popup_close;
        myDialog.setContentView(R.layout.activity_regi_vehicle_popup);
        popup_close = myDialog.findViewById(R.id.btn_popup_close);
        popup_close.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                myDialog.dismiss();
            }
        });
        myDialog.getWindow().setBackgroundDrawable(new ColorDrawable(Color.TRANSPARENT));
        myDialog.show();
    }

    public void ShowPopupOther(View v) {
        TextView popup_close;
        myDialog.setContentView(R.layout.activity_other_vehicle_popup);
        popup_close = myDialog.findViewById(R.id.btn_popup_close);
        popup_close.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                myDialog.dismiss();
            }
        });
        myDialog.getWindow().setBackgroundDrawable(new ColorDrawable(Color.TRANSPARENT));
        myDialog.show();
    }


    @Override
    public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {

    }

    @Override
    public void onNothingSelected(AdapterView<?> parent) {

    }

    public void hideSoftKeyboard() {
        this.getWindow().setSoftInputMode(WindowManager.LayoutParams.SOFT_INPUT_STATE_ALWAYS_HIDDEN);
    }
}

