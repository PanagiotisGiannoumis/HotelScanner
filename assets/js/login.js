document.addEventListener("DOMContentLoaded", () => {

  const $form = document.querySelector("form");
  const $email = document.querySelector("#LoginPage_Email");
  const $password = document.querySelector("#LoginPage_Password");
  const $emailError = document.querySelector(".email-error");
  const $passwordError = document.querySelector(".password-error");

  const getValidations = ({ email, password }) => {
    let emailIsValid = false;
    let passwordIsValid = false;

    if (
      email !== "" &&
      /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)
    ) {
      emailIsValid = true;
    }

    if (password !== "" && password.length > 5) {
      passwordIsValid = true;
    }

    return {
      emailIsValid,
      passwordIsValid,
    };
  };

  $form.addEventListener("submit", (e) => {
    e.preventDefault();
    const { LoginPage_Email, LoginPage_Password } = e.target.elements;
    const values = {
      email: LoginPage_Email.value,
      password: LoginPage_Password.value,
    };
    const validations = getValidations(values);

    if (!validations.emailIsValid) {
      $email.classList.add("is-invalid");
      $emailError.classList.remove("d-none");
    } else {
      $email.classList.remove("is-invalid");
      $emailError.classList.add("d-none");
    }

    if (!validations.passwordIsValid) {
      $password.classList.add("is-invalid");
      $passwordError.classList.remove("d-none");
    } else {
      $password.classList.remove("is-invalid");
      $passwordError.classList.add("d-none");
    }

    if (validations.emailIsValid && validations.passwordIsValid) {
      $form.submit();
    }
  });

  $emailError.classList.add("d-none");
  $passwordError.classList.add("d-none");
  
    
});

