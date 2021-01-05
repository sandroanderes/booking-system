var start_splitted, end_splitted, time_slot, duration, h, m, end_time;

start_splitted = start_general.split(':')
end_splitted = end_general.split(':')
start_general = new Date(null, null, null, start_splitted[0], start_splitted[1]);
time_slot = new Date(null, null, null, start_splitted[0], start_splitted[1]);
end_general = new Date(null, null, null, end_splitted[0], end_splitted[1]);
duration = parseFloat(document.getElementById('duration_output').value);

console.log(start_general);
console.log(end_general);

/* time_slot.setMinutes(time_slot.getMinutes() + (duration * 60)); */

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
console.log(end_general);

while (end_time <= end_general) {
    console.log(start_general + " - " + end_time);
    time_slot.setMinutes(time_slot.getMinutes() + (duration * 60));

    h = addZero(time_slot.getHours());
    m = addZero(time_slot.getMinutes());
    end_time = h + ":" + m;
    console.log(end_time);

    console.log(start_general + " - " + end_time);
}

function addZero(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}