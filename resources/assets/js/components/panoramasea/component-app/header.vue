<template>
  <header class="header">
    <div class="header__video">
      <video autoplay muted loop id="myVideo">
        <source src="public/images/playback/Playback.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="header__overlay"></div>
    <div class="header__content">
      <div class="container">
        <nav class="header__menu">
          <div class="menu__btn">
            <span></span>
          </div>

          <ul class="header__list">
            <button class="close__btn"></button>
            <li>
              <a class="menu__item" href="#">Главная</a>
            </li>
            <li>
              <a
                class="menu__item"
                href="#services"
                v-on:click.prevent="$root.toScroll = 'services'"
                >Расположение и услуги</a
              >
            </li>
            <li>
              <a
                class="menu__item"
                href="#rooms"
                v-on:click.prevent="$root.toScroll = 'rooms'"
                >Номера</a
              >
            </li>
            <li>
              <a
                class="menu__item"
                href="#gallery-block"
                v-on:click.prevent="$root.toScroll = 'gallery-block'"
                >Галерея</a
              >
            </li>
            <li>
              <a
                class="menu__item"
                href="#contacts"
                v-on:click.prevent="$root.toScroll = 'contacts'"
                >Контакты</a
              >
            </li>
          </ul>
          <a v-on:click="openModal" class="header__booking" href="#"
            >Бронировать</a
          >
        </nav>
        <div class="header__logo">
          <img src="public/images/Header-logo-1.svg" alt="Header-logo" />
        </div>
        <div class="header__arrow">
          <a href="#intro" v-on:click.prevent="$root.toScroll = 'intro'">
            <svg
              width="34"
              height="45"
              viewBox="0 0 34 45"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M29.9908 17.4955L17 30.4863L4.00921 17.4955L0 21.5046L17 38.5046L34 21.5046L29.9908 17.4955Z"
                fill="white"
              />
              <path
                d="M24.5237 4.0119L16.5 12.0356L8.47628 4.0119L6 6.4881L16.5 16.9881L27 6.4881L24.5237 4.0119Z"
                fill="white"
              />
            </svg>
          </a>
        </div>
        <div class="header__links">
          <a class="header__link header__phone ibg" href="tel:+7-918-250–44-55">
            <svg
              width="30"
              height="30"
              viewBox="0 0 38 38"
              fill="white"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M36 26.6667C32.128 26.6667 28.44 25.824 25.04 24.1627C24.72 24.0027 24.352 23.984 24.0187 24.1013C23.6827 24.2187 23.408 24.464 23.2533 24.7813L21.1573 29.12C15.7333 26.0933 11.2427 21.6053 8.21867 16.1813L12.5547 14.08C12.8747 13.9253 13.1173 13.6507 13.2347 13.3147C13.3493 12.9813 13.328 12.6133 13.1707 12.2933C11.5093 8.89333 10.6667 5.20533 10.6667 1.33333C10.6667 0.597333 10.0693 0 9.33333 0H1.33333C0.597333 0 0 0.597333 0 1.33333C0 21.184 16.1493 37.3333 36 37.3333C36.736 37.3333 37.3333 36.736 37.3333 36V28C37.3333 27.264 36.736 26.6667 36 26.6667Z"
                fill="white"
              />
            </svg>
          </a>
          <a class="header__link header__location ibg" href="#contacts">
            <svg
              width="30"
              height="30"
              viewBox="0 0 40 40"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M20.0001 0C12.6482 0 6.66675 5.98149 6.66675 13.3334C6.66675 15.5404 7.21854 17.7287 8.26753 19.6696L19.271 39.5703C19.4175 39.8356 19.6966 40 20.0001 40C20.3036 40 20.5828 39.8356 20.7292 39.5703L31.7367 19.663C32.7817 17.7287 33.3335 15.5403 33.3335 13.3333C33.3335 5.98148 27.352 0 20.0001 0ZM20.0001 20C16.3242 20 13.3335 17.0093 13.3335 13.3334C13.3335 9.65742 16.3242 6.66672 20.0001 6.66672C23.676 6.66672 26.6667 9.65742 26.6667 13.3334C26.6667 17.0093 23.676 20 20.0001 20Z"
                fill="white"
              />
            </svg>
          </a>
          <a
            class="header__link header__insta ibg"
            href="https://www.instagram.com/panorama_sea/"
            blank
          >
            <svg
              width="30"
              height="30"
              viewBox="0 0 40 40"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g clip-path="url(#clip0)">
                <path
                  d="M20.0067 9.72998C14.3351 9.72998 9.74341 14.3266 9.74341 19.9933C9.74341 25.665 14.3401 30.2567 20.0067 30.2567C25.6784 30.2567 30.2701 25.66 30.2701 19.9933C30.2701 14.3216 25.6734 9.72998 20.0067 9.72998ZM20.0067 26.655C16.3251 26.655 13.3451 23.6733 13.3451 19.9933C13.3451 16.3133 16.3267 13.3316 20.0067 13.3316C23.6867 13.3316 26.6684 16.3133 26.6684 19.9933C26.6701 23.6733 23.6884 26.655 20.0067 26.655Z"
                  fill="white"
                />
                <path
                  d="M28.2466 0.126926C24.5666 -0.0447405 15.4516 -0.0364072 11.7682 0.126926C8.53156 0.278593 5.67656 1.06026 3.37489 3.36193C-0.471776 7.20859 0.0198905 12.3919 0.0198905 19.9936C0.0198905 27.7736 -0.413443 32.8369 3.37489 36.6253C7.23656 40.4853 12.4949 39.9803 20.0066 39.9803C27.7132 39.9803 30.3732 39.9853 33.0982 38.9303C36.8032 37.4919 39.5999 34.1803 39.8732 28.2319C40.0466 24.5503 40.0366 15.4369 39.8732 11.7536C39.5432 4.73193 35.7749 0.473593 28.2466 0.126926ZM34.0716 34.0803C31.5499 36.6019 28.0516 36.3769 19.9582 36.3769C11.6249 36.3769 8.28322 36.5003 5.84489 34.0553C3.03656 31.2603 3.54489 26.7719 3.54489 19.9669C3.54489 10.7586 2.59989 4.12693 11.8416 3.65359C13.9649 3.57859 14.5899 3.55359 19.9349 3.55359L20.0099 3.60359C28.8916 3.60359 35.8599 2.67359 36.2782 11.9136C36.3732 14.0219 36.3949 14.6553 36.3949 19.9919C36.3932 28.2286 36.5499 31.5903 34.0716 34.0803Z"
                  fill="white"
                />
                <path
                  d="M30.6767 11.7233C32.0012 11.7233 33.075 10.6495 33.075 9.32497C33.075 8.0004 32.0012 6.92664 30.6767 6.92664C29.3521 6.92664 28.2783 8.0004 28.2783 9.32497C28.2783 10.6495 29.3521 11.7233 30.6767 11.7233Z"
                  fill="white"
                />
              </g>
              <defs>
                <clipPath id="clip0">
                  <rect width="40" height="40" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>

        <!--modal form start here-->
        <!--modal form ends here-->
      </div>
    </div>
    <div v-show="modalShow" id="modal__form" class="modal">
      <div class="modal__overlay" v-on:click="closeModal">
        <div v-on:click.stop class="modal__wrapper">
          <button v-on:click="closeModal" class="modal__close">
            <span></span>
          </button>
          <form v-on:submit.prevent="onSubmit">
            <fieldset>
              <legend>Регистрация</legend>
              <label for="first-name">Имя</label>
              <input
                type="text"
                name="first-name"
                id="first-name"
                placeholder="Введите ваше имя"
                v-model="formFields.firstName"
                required
              />
              <label for="last-name">Фамилия</label>
              <input
                type="text"
                name="last-name"
                id="last-name"
                placeholder="Введите вашу фамилию"
                v-model="formFields.lastName"
                required
              />
              <label for="phone">Номер телефона</label>
              <input
                type="tel"
                name="phone"
                id="phone"
                placeholder="Номер в формате: +7-9xx-xxx–xx-xx"
                v-model="formFields.telNumber"
                required
              />
              <label for="email">Email</label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="example@gmail.com"
                v-model="formFields.emailField"
                required
              />
              <button
                v-html="pending ? 'Подождите' : 'Отправить'"
                class="btn"
                type="submit"
              >
                Отправить
              </button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="modal__message" v-show="messageShow">
      <h2>Благодарим!</h2>
      <p>Наши сотрудники свяжутся с Вами в ближайшее время</p>
    </div>
  </header>
</template>

<script>
export default {
  data() {
    return {
      location: window.location.origin,
      modalShow: false,
      messageShow: false,
      pending: false,
      formFields: {
        firstName: "",
        lastName: "",
        telNumber: "",
        emailField: "",
      },
    };
  },
  computed: {},
  methods: {
    openModal: function() {
      this.modalShow = true;
      if (this.modalShow === true) {
        const pageBody = document.querySelector("body");
        pageBody.classList.add("scroll__block");
      }
    },
    closeModal: function() {
      this.modalShow = false;
      const pageBody = document.querySelector("body");
      pageBody.classList.remove("scroll__block");
    },
    onSubmit: function() {
      let bookingForm = this.formFields;

      for (let field in bookingForm) {
        if (bookingForm[field] === "") {
          return;
        }
      }
      this.pending = true;
      let botMessage =
        "Клиент " +
        this.formFields.firstName +
        " " +
        this.formFields.lastName +
        " \n " +
        "Номер телефона:" +
        " " +
        this.formFields.telNumber +
        " \n " +
        " " +
        "Email:" +
        " " +
        this.formFields.emailField;

      axios
        .post(
          `https://api.telegram.org/bot1162837118:AAH9tz73hnTzPualT4ZUvWvFDQhAacgGrL8/sendMessage?chat_id=1183288429&text=${botMessage}`,
          { input: bookingForm }
        )
        .then(function(response) {
          // handle success
          console.log(response);
        })
        .catch(function(error) {
          // handle error
          console.log(error);
        })
        .finally(function() {
          // always executed
        });

      this.modalShow = false;
      this.messageShow = true;
      setTimeout(() => {
        this.messageShow = false;
        const pageBody = document.querySelector("body");
        pageBody.classList.remove("scroll__block");
      }, 3000);
    },
  },
};
</script>
