var start_splitted, end_splitted, count_time, duration, h, m, end_time;

start_splitted = start_general.split(':')
end_splitted = end_general.split(':')


document.getElementById("res_duration").addEventListener("change", setTimeSlot);


function setTimeSlot() {
    start_time = new Date(null, null, null, start_splitted[0], start_splitted[1]);
    end_time = new Date(null, null, null, end_splitted[0], end_splitted[1]);
    count_time = new Date(null, null, null, start_splitted[0], start_splitted[1]);
    duration = parseFloat(document.getElementById('duration_output').value);
    console.log(duration);

    duration = parseFloat(document.getElementById('duration_output').value);

    console.log(start_time);
    console.log(end_time);

    /* h = addZero(start_time.getHours());
    m = addZero(start_time.getMinutes());
    start_time = h + ":" + m;
    console.log(start_time); */



    /* h = addZero(count_time.getHours());
    m = addZero(count_time.getMinutes());
    var test = h + ":" + m;
    console.log(test); */

    /* h = addZero(end_time.getHours());
    m = addZero(end_time.getMinutes());
    end_time = h + ":" + m;
    console.log(end_time); */

    /* if (Date.parse(count_time) >= Date.parse(end_time)) {
        console.log(true);
    } */

    while (count_time <= end_time.setMinutes( end_time.getMinutes() - duration )) {
        h1 = addZero(count_time.getHours());
        m2 = addZero(count_time.getMinutes());
        var time_slot_1 = h1 + ":" + m2;

        count_time.setMinutes(count_time.getMinutes() + (duration * 60))
        h2 = addZero(count_time.getHours());
        m2 = addZero(count_time.getMinutes());
        time_slot_2 = h2 + ":" + m2;
        console.log(time_slot_1 + " - " + time_slot_2);

        
    }
    /* for (count_time; count_time <= end_time; count_time.setMinutes(count_time.getMinutes() + (duration * 60))) {
        
        h1 = addZero(count_time.getHours());
        m2 = addZero(count_time.getMinutes());
        var time_slot_1  = h1 + ":" + m2;
        console.log(time_slot_1);


        h2 = addZero(count_time.getHours());
        m2 = addZero(count_time.getMinutes());
        time_slot_2  = h2 + ":" + m2;
        console.log(time_slot_1);

    } */
}

/* time_slot.setMinutes(time_slot.getMinutes() + (duration * 60)); */
/* 
    h = addZero(time_slot.getHours());
    m = addZero(time_slot.getMinutes());
    end_time = h + ":" + m;
    console.log(end_time);

    h = addZero(start_general.getHours());
    m = addZero(start_general.getMinutes());
    start_general = h + ":" + m;
    console.log(start_general);

    h = addZero(end_general.getHours());
    m = addZero(end_general.getMinutes());
    end_general = h + ":" + m;
    console.log(end_general); */


function addZero(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}