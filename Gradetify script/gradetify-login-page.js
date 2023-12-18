// //fungsi untuk move ke page input
// function moveLoginPage2 () {
//   const startedText = document.querySelector('.started-text')
//   const inputBox = document.querySelector('.inputbox') //kelas untuk nampilin username
//   const inputBox2 = document.querySelector('.inputbox2') //kelas untuk nampilin pass

//     //hilangin lets get started, munculin inputbox user & pass
//     startedText.style.display = 'none';
//     inputBox.style.display = 'flex';
//     inputBox2.style.display = 'flex';

//   let buttonShrink = document.querySelector('.login-button-js')
//     buttonShrink.classList.add('shrinked');

//   const helloText = document.querySelector('.hello')
//     .innerHTML = 'Login To Gradetify'
    

  
// //   buttonShrink.classList.add('shrinked'); //untuk menambah class ketika di klik
//   }

// // function fade () {
// //   let textFade = document.querySelector('.hello')
// //     textFade.classList.add('Login')
// // }


//fungsi untuk move ke page input
function moveLoginPage2() {
  const startedText = document.querySelector('.started-text')
  const inputBox = document.querySelector('.inputbox') //kelas untuk nampilin username
  const inputBox2 = document.querySelector('.inputbox2') //kelas untuk nampilin pass

  // deklare variable sebagai penanda apakah sudah di klik untuk transisi, kalau udah 'true', else 'false'
  const isMovedToLoginPage2 = startedText.style.display === 'none'
    if(isMovedToLoginPage2) {
      // kalau sudah di transisi, maka redirect ke home page
      window.location.href='gradetify-home-page.html'
    } else {
        //kalau belum transisi, maka hilangin lets get started, munculin inputbox user & pass
    startedText.style.display = 'none';
    inputBox.style.display = 'flex';
    inputBox2.style.display = 'flex';

  let buttonShrink = document.querySelector('.login-button-js')
    buttonShrink.classList.add('shrinked');

  const helloText = document.querySelector('.hello')
    .innerHTML = 'Login To <br> <br> <br> <br>Gradetify'
  
    }
  

  
//   buttonShrink.classList.add('shrinked'); //untuk menambah class ketika di klik
  }

// function fade () {
//   let textFade = document.querySelector('.hello')
//     textFade.classList.add('Login')
// }