var start_splitted, end_splitted, start_time, end_time, count_time, duration, h1, h2, m1, m2, option, time_slot_1, time_slot_2, x;

start_splitted = start_general.split(':')
end_splitted = end_general.split(':')


document.getElementById("res_duration").addEventListener("change", setTimeSlot);


function setTimeSlot() {
    start_time = new Date(null, null, null, start_splitted[0], start_splitted[1]);
    end_time = new Date(null, null, null, end_splitted[0], end_splitted[1]);
    count_time = new Date(null, null, null, start_splitted[0], start_splitted[1]);
    duration = parseFloat(document.getElementById('duration_output').value);

    select = document.getElementById("timeslot");
    var length = select.options.length;
    for (i = length - 1; i >= 0; i--) {
        select.options[i] = null;
    }


    console.log(duration);

    duration = parseFloat(document.getElementById('duration_output').value);

    while (count_time <= end_time) {

        h1 = addZero(count_time.getHours());
        m1 = addZero(count_time.getMinutes());
        time_slot_1 = h1 + ":" + m1;

        count_time.setMinutes(count_time.getMinutes() + (duration * 60))
        h2 = addZero(count_time.getHours());
        m2 = addZero(count_time.getMinutes());
        time_slot_2 = h2 + ":" + m2;

        if (count_time <= end_time) {

            console.log(time_slot_1 + " - " + time_slot_2);
            option = document.createElement("option");
            option.text = time_slot_1 + " - " + time_slot_2;
            select.add(option);

        } else {
            break;
        }
    }
}

function addZero(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}