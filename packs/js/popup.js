const openPopUpButtons = document.querySelectorAll('.open_pop_up'); // Ищем по классу
const closePopUp = document.getElementById('pop_up_close');
const popUp = document.getElementById('pop_up');

openPopUpButtons.forEach(button => {
  button.addEventListener('click', function(e) {
    e.preventDefault();
    popUp.classList.add('active');
  });
});

closePopUp.addEventListener('click', () => {
  popUp.classList.remove('active');
});

// change form
