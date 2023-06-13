$('.bg-pointer').paroller();
$('.bg-text').paroller();

// const random = (min, max) => Math.floor(Math.random() * (max - min)) + min;
// let word_switch = document.getElementById('word_switch').innerHTML;
// const words_dict = ['кликов', 'нажатий', 'свайпов', 'звонков'];
// while (true) {
//   word_switch = words_dict[random(0, 3)];
//
// };

function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

const project_obj = document.getElementById("projects_number");
const clients_obj = document.getElementById("clients_number");
const income_obj = document.getElementById("income_number");

animateValue(project_obj, 0, 190, 2000);
animateValue(clients_obj, 0, 1200, 2500);
animateValue(income_obj, 0, 20, 1500);

