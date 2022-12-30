/*

inspiration: 
https://dribbble.com/shots/2292415-Daily-UI-001-Day-001-Sign-Up

*/

let form = document.querySelecter('form');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  return false;
});

function redirect_reg () {
window.location.href= "../php/register.php";
}



