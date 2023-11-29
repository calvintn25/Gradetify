//fungsi untuk move ke page input
function moveLoginPage2 () {
  const startedText = document.querySelector('.started-text')
  const inputBox = document.querySelector('.inputbox') //kelas untuk nampilin username
  const inputBox2 = document.querySelector('.inputbox2') //kelas untuk nampilin pass

    //hilangin lets get started, munculin inputbox user & pass
    startedText.style.display = 'none';
    inputBox.style.display = 'flex';
    inputBox2.style.display = 'flex';

  let buttonShrink = document.querySelector('.login-button-js')
    buttonShrink.classList.add('shrinked');

  const helloText = document.querySelector('.hello')
    .innerHTML = 'Login To Gradetify'
    

  
//   buttonShrink.classList.add('shrinked'); //untuk menambah class ketika di klik
  }

// function fade () {
//   let textFade = document.querySelector('.hello')
//     textFade.classList.add('Login')
// }