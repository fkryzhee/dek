const countdown = () => {
    const countDate = new Date('September 28, 2023 00:00:00').getTime();
    const now = new Date().getTime();
    const gap = countDate - now;
  
    // Time in seconds
    const second = 1000;
    const minute = second * 60;
    const hour = minute * 60;
    const day = hour * 24;
  
    // Calculate countdown
    const days = Math.floor(gap / day);
    const hours = Math.floor((gap % day) / hour);
    const minutes = Math.floor((gap % hour) / minute);
    const seconds = Math.floor((gap % minute) / second);
  
    document.getElementById('days').innerText = days;
    document.getElementById('hours').innerText = hours;
    document.getElementById('minutes').innerText = minutes;
    document.getElementById('seconds').innerText = seconds;
  }




  
  setInterval(countdown, 1000);

  function goToIndex() {
    window.location.href = "index.html";
}
