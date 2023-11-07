document.addEventListener("DOMContentLoaded", () => {

    const $form = document.querySelector("form");
    const $email = document.querySelector("#RegisterPage_Email");
    const $emailRepeat = document.querySelector("#RegisterPage_EmailRepeat");
    const $password = document.querySelector("#RegisterPage_Password");
    const $emailError = document.querySelector(".email-error");
    const $emailErrorRepeat = document.querySelector(".email-error-repeat");
    const $passwordError = document.querySelector(".password-error");
  
    const getValidations = ({ email, emailrepeat, password }) => {
      let emailIsValid = false;
      let emailRepeatIsValid = false;
      let passwordIsValid = false;
  
      if (email !== "" && /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        emailIsValid = true;
      }

      if (emailrepeat !== "" && /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailrepeat)) {
        emailRepeatIsValid = true;
      }
  
      if (password !== "" && password.length > 5) {
        passwordIsValid = true;
      }
  
      return {
        emailIsValid,
        emailRepeatIsValid,
        passwordIsValid,
      };
    };
  
    $form.addEventListener("submit", (e) => {
      e.preventDefault();
      const { RegisterPage_Email, RegisterPage_EmailRepeat, RegisterPage_Password } = e.target.elements;
      const values = {
        email: RegisterPage_Email.value,
        emailrepeat: RegisterPage_EmailRepeat.value,
        password: RegisterPage_Password.value,
      };
      const validations = getValidations(values);
  
      if (!validations.emailIsValid) {
        $email.classList.add("is-invalid");
        $emailError.classList.remove("d-none");
      } else {
        $email.classList.remove("is-invalid");
        $emailError.classList.add("d-none");
      }

      if(values.email !== values.emailrepeat) {
        $emailRepeat.classList.add("is-invalid");
        $emailErrorRepeat.classList.remove("d-none");
      }
      else {
        $emailRepeat.classList.remove("is-invalid");
        $emailErrorRepeat.classList.add("d-none");
      }
  
      if (!validations.passwordIsValid) {
        $password.classList.add("is-invalid");
        $passwordError.classList.remove("d-none");
      } else {
        $password.classList.remove("is-invalid");
        $passwordError.classList.add("d-none");
      }
  
      if (validations.emailIsValid && validations.emailRepeatIsValid && validations.passwordIsValid) {
        $form.submit();
      }
    });
  
    $emailError.classList.add("d-none");
    $emailErrorRepeat.classList.add("d-none");
    $passwordError.classList.add("d-none");
    
      
});
  
  