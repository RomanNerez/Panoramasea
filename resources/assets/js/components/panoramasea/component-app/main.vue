<template>
  <main>
    <section class="intro" id="intro">
      <div class="intro__header">
        <h1>PanoramaSea</h1>
        <p>дарит прекрасную возможность провести незабываемые дни отдыха, позабыв о городской суете и ежедневных заботах. Расслабьтесь и насладитесь каждым моментом в нашем гостевом доме Черноморского побережья России.</p>
      </div>
      <div class="intro__image intro__image-1">
        <div class="image__block ibg">
          <img src="public/images/intro-1.jpg" alt="Panorama Beach View" />
        </div>
        <b>Курорт Лазаревское обладает развитой инфраструктурой, где созданы все условия для комфортного и беззаботного отдыха.</b>
      </div>
      <div class="intro__image intro__image-2">
        <span>Лазаревское</span>
        <div class="image__block ibg">
          <img src="public/images/intro-2.jpg" alt="Panorama Beach View" />
        </div>
      </div>
    </section>

    <section class="services" id="services">
      <div class="container">
        <div class="page__heading">
          <h2>Расположение и услуги</h2>
        </div>
      </div>
      <div class="services__item">
        <div class="services__image">
          <div class="services__pic ibg">
            <img src="public/images/services-4.jpg" alt="Panorama look" />
          </div>
        </div>
        <p>
          <span>Гостевой дом</span> находится в поселке Лазаревское города-курорта Сочи, в тихой и зеленой зоне. Из номеров открывается живописный вид на море, до берега которого всего 400 м. В пешей доступности располагаются кафе и магазины. Автобусная остановка в 5 минутах, гипермаркет «Магнит» – в 15 минутах, аквапарк «Наутилус» – в 20 минутах ходьбы. До центра можно добраться на машине ( 5 мин) или же пройтись спокойным шагом в течении 25-30 минутах.
          ЖД вокзал – в 5 минутах езды на автомобиле.
        </p>
      </div>
      <div class="services__item item-2">
        <div class="services__image">
          <div class="services__pic ibg">
            <img src="public/images/services-2.jpg" alt="Panorama look" />
          </div>
        </div>
        <p>
          Пляж расположен в шаговой доступности, путь к нему пролегает через парковую зону санатория «Лазаревское» и занимает 10-12 минут неспешной ходьбы. Чистая, широкая пляжная галечная зона оборудована дорожками, раздевалками, душами с пресной водой и туалетами. Также для ваших удобств можно за дополнительную плату взять шезлонги и зонты в аренду.
          На пляже расположены кафе и магазины, где можно вкусно поесть и приобрести все необходимое. В вечернее время прогуляться по набережной с различными кафе, где играет зажигательная музыка. В отличие от других пляжей, умеренное количество отдыхающих, доставит вам комфортный отдых.
        </p>
      </div>
      <div class="container">
        <div class="services__info">
          <p>
            К услугам гостевого дома открытый бассейн, размером 10,0*4,0метра. Зона отдыха с комфортабельными шезлонгами и зонтами. Вечером гости могут насладится впечатляющими закатами Черноморского побережья!
          </p>
          <p>
            На территории находится кухня общего пользования, оборудована мойкой, газовыми печками, микроволновой печью и стиральной машиной. Для приготовления и приема пиши вы найдете всю необходимую посуду и пренадлежностями. Также есть возможность пользоваться мангалом.
            На всей территории отеля доступен бесплатный Wi-Fi.
          </p>
          <p>На этаже расположена гладильная доска, утюг и фен.</p>
        </div>
        <div class="video">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/rhezVRsaOso"
            frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </section>

    <section class="rooms" id="rooms">
      <div class="container">
        <div class="page__heading">
          <h2>Номера PanoramaSea</h2>
        </div>
        <div class="rooms__tabs-wrapper">
          <nav class="tabs__items">
            <button
              class="tabs__item"
              v-on:click="tabsIndex = 1"
              :class="{active: tabsIndex === 1}"
            >Стандартный номер с видом на море</button>
            <button
              class="tabs__item"
              v-on:click="tabsIndex = 2"
              :class="{active: tabsIndex === 2}"
            >Стандартный номер на первом этаже</button>
            <button
              class="tabs__item"
              v-on:click="tabsIndex = 3"
              :class="{active: tabsIndex === 3}"
            >Стандартный трехместный номер</button>
            <button
              class="tabs__item"
              v-on:click="tabsIndex = 4"
              :class="{active: tabsIndex === 4}"
            >Семейный номер</button>
          </nav>
        </div>
      </div>

      <div class="tabs__body">
        <div id="tab_01" class="tabs__block" v-if="tabsIndex === 1">
          <div class="rooms__gallery">
            <div class="rooms__track">
              <a data-fancybox="gallery" class="rooms__img" v-for="slide in slides" :key="slide">
                <img :src="'public/images/room-1-gallery/' + slide" />
              </a>
            </div>
            <button v-on:click="keyPrev('slides')" class="rooms__btn btn__prew">&#9664</button>
            <button v-on:click="keyNext('slides')" class="rooms__btn btn__next">&#9658</button>
          </div>

          <div class="container rooms__info">
            <div class="rooms__title">
              <h3>Стандартный номер с видом на море</h3>
              <p>Номер оформлен в современном стиле с меблированным балконом, с которого открывается восхитительный вид на море. Имеет одну большую двуспальную кровать или две односпальные кровати ( по запросу гостя) и кресло-кровать. По требованию для гостей с маленькими детьми предоставляется в номер детская кроватка.</p>
            </div>
            <div class="rooms__features">
              <p>Предлагаемые удобства и возможности:</p>
              <ul>
                <li>Балкон</li>
                <li>Телевизор с плоским экраном</li>
                <li>Кондиционер</li>
                <li>Холодильник</li>
                <li>Ванная комната: душ, туалет, умывальник</li>
                <li>Площадь номера : 17 кв.м.</li>
                <li>Максимальная вместимость: 3 взрослых.</li>
              </ul>
              <a v-show="false" class="rooms__booking btn" href="#">Забронировать</a>
            </div>
          </div>
        </div>

        <div id="tab_02" class="tabs__block" v-else-if="tabsIndex === 2">
          <div class="rooms__gallery">
            <div class="rooms__track">
              <a
                data-fancybox="gallery"
                class="rooms__img"
                v-for="slide in slidesSecond"
                :key="slide"
              >
                <img :src="'public/images/room-2-gallery/' + slide" />
              </a>
            </div>
            <button v-on:click="keyPrev('slidesSecond')" class="rooms__btn btn__prew">&#9664</button>
            <button v-on:click="keyNext('slidesSecond')" class="rooms__btn btn__next">&#9658</button>
          </div>

          <div class="container rooms__info">
            <div class="rooms__title">
              <h3>Стандартный номер на первом этаже</h3>
              <p>Номер оформлен в современном стиле, расположен на первом этаже. Перед номером небольшая огражденная терраса с мебелью, где можно отдохнуть на свежем воздухе. Вид из номера выходит на тихую улицу. Имеет одну большую двуспальную кровать или две односпальные кровати ( по запросу гостя) и кресло-кровать. По требованию для гостей с маленькими детьми предоставляется в номер детская кроватка.</p>
            </div>
            <div class="rooms__features">
              <p>Предлагаемые удобства и возможности:</p>
              <ul>
                <li>Балкон</li>
                <li>Телевизор с плоским экраном</li>
                <li>Кондиционер</li>
                <li>Холодильник</li>
                <li>Ванная комната: душ, туалет, умывальник</li>
                <li>Площадь номера : 19 кв.м.</li>
                <li>Максимальная вместимость: 3 взрослых.</li>
              </ul>
              <a v-show="false" class="rooms__booking btn" href="#">Забронировать</a>
            </div>
          </div>
        </div>
        <div id="tab_03" class="tabs__block" v-else-if="tabsIndex === 3">
          <div class="rooms__gallery">
            <div class="rooms__track">
              <a
                data-fancybox="gallery"
                class="rooms__img"
                v-for="slide in slidesThird"
                :key="slide"
              >
                <img :src="'public/images/room-3-gallery/' + slide" />
              </a>
            </div>
            <button v-on:click="keyPrev('slidesThird')" class="rooms__btn btn__prew">&#9664</button>
            <button v-on:click="keyNext('slidesThird')" class="rooms__btn btn__next">&#9658</button>
          </div>

          <div class="container rooms__info">
            <div class="rooms__title">
              <h3>Стандартный трехместный номер</h3>
              <p>Номер оформлен в современном стиле с меблированным балконом, с которого открывается восхитительный вид на море. Имеет одну большую двуспальную кровать и одну односпальную кровать или три односпальные кровати ( по запросу гостя). По требованию для гостей с маленькими детьми предоставляется в номер детская кроватка.</p>
            </div>
            <div class="rooms__features">
              <p>Предлагаемые удобства и возможности:</p>
              <ul>
                <li>Балкон</li>
                <li>Телевизор с плоским экраном</li>
                <li>Кондиционер</li>
                <li>Холодильник</li>
                <li>Ванная комната: душ, туалет, умывальник</li>
                <li>Площадь номера : 21 кв.м.</li>
                <li>Максимальная вместимость: 3 взрослых.</li>
              </ul>
              <a v-show="false" class="rooms__booking btn" href="#">Забронировать</a>
            </div>
          </div>
        </div>
        <div id="tab_04" class="tabs__block" v-else-if="tabsIndex === 4">
          <div class="rooms__gallery">
            <div class="rooms__track">
              <a
                data-fancybox="gallery"
                class="rooms__img"
                v-for="slide in slidesFourth"
                :key="slide"
              >
                <img :src="'public/images/room-4-gallery/' + slide" />
              </a>
            </div>
            <button v-on:click="keyPrev('slidesFourth')" class="rooms__btn btn__prew">&#9664</button>
            <button v-on:click="keyNext('slidesFourth')" class="rooms__btn btn__next">&#9658</button>
          </div>

          <div class="container rooms__info">
            <div class="rooms__title">
              <h3>Семейный номер</h3>
              <p>
                Номер оформлен в современном стиле с меблированным балконом, с которого открывается восхитительный вид на море
                Эта категория номера отлично подходит для семейного отдыха. Номер состоит из отдельной спальни и кухни-гостиной, с обоих комнат есть выход на общий балкон. Имеется кухонный гарнитур с электрической плитой, холодильником и всей необходимой посудой для приготовления и приемма пищи. Номер содержит пять спальных мест: одна двуспальная кровать, раскладной двуспальный диван и одно кресло-кровать. По требованию для гостей с маленькими детьми предоставляется в номер детская кроватка.
              </p>
            </div>
            <div class="rooms__features">
              <p>Предлагаемые удобства и возможности:</p>
              <ul>
                <li>Балкон</li>
                <li>Телевизор с плоским экраном</li>
                <li>Кондиционер</li>
                <li>Холодильник</li>
                <li>Ванная комната: душ, туалет, умывальник</li>
                <li>Площадь номера : 21 кв.м.</li>
                <li>Максимальная вместимость: 3 взрослых.</li>
              </ul>
              <a v-show="false" class="rooms__booking btn" href="#">Забронировать</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery" id="gallery-block">
      <div class="container">
        <div class="page__heading">
          <h2>Галерея</h2>
        </div>
        <div class="gallery__wrapper">
          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-1.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-1.jpg" alt="gallery-image-1" />
          </a>

          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-2.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-2.jpg" alt="gallery-image-2" />
          </a>

          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-3.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-3.jpg" alt="1" />
          </a>

          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-4.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-4.jpg" alt="1" />
          </a>

          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-6.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-6.jpg" alt="1" />
          </a>

          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-7.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-7.jpg" alt="1" />
          </a>

          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-8.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-8.jpg" alt="1" />
          </a>

          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-9.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-9.jpg" alt="1" />
          </a>

          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-10.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-10.jpg" alt="1" />
          </a>

          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-11.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-11.jpg" alt="1" />
          </a>

          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-12.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-12.jpg" alt="1" />
          </a>

          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-13.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-13.jpg" alt="1" />
          </a>

          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-14.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-14.jpg" alt="1" />
          </a>
          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-15.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-15.jpg" alt="1" />
          </a>
          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-16.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-16.jpg" alt="1" />
          </a>
          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-17.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-17.jpg" alt="1" />
          </a>
          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-18.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-18.jpg" alt="1" />
          </a>
          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-19.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-19.jpg" alt="1" />
          </a>
          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-20.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-20.jpg" alt="1" />
          </a>
          <a
            data-fancybox="gallery"
            href="public/images/gallery/gallery-21.jpg"
            class="gallery__item ibg"
          >
            <img src="public/images/gallery/Thumnail/gallery-thumbnail-21.jpg" alt="1" />
          </a>
        </div>
      </div>
    </section>

    <section class="contacts">
      <div class="container">
        <div class="page__heading">
          <h2>Контакты</h2>
        </div>
      </div>

      <div class="contacts__wrapper">
        <div class="contacts__map" id="map">
          <iframe
            src="https://yandex.ru/map-widget/v1/?um=constructor%3A9919f3a4f859c336f022d589ddc62328741f34d411329d1b87b5f11edcac8d96&amp;source=constructor"
            width="100%"
            height="100%"
            frameborder="0"
          ></iframe>
        </div>
        <div class="contacts__img ibg">
          <img src="https://panoramasea.ru/public/images/services-1.jpg" alt />
        </div>
      </div>
    </section>
  </main>
</template>






<script>
export default {
  data() {
    return {
      tabsIndex: 1,
      slides: [
        "first-room-1.jpg",
        "first-room-2.jpg",
        "first-room-3.jpg",
        "first-room-4.jpg",
        "first-room-5.jpg",
        "first-room-6.jpg",
        "first-room-7.jpg",
        "first-room-8.jpg",
        "first-room-9.jpg",
        "first-room-10.jpg",
        "first-room-11.jpg",
        "first-room-12.jpg",
        "first-room-13.jpg",
        "first-room-14.jpg",
        "first-room-15.jpg",
        "first-room-16.jpg",
        "first-room-17.jpg",
        "first-room-18.jpg",
        "first-room-19.jpg",
        "first-room-20.jpg",
        "first-room-21.jpg",
        "first-room-22.jpg",
        "first-room-23.jpg",
        "first-room-24.jpg",
        "first-room-25.jpg",
        "first-room-26.jpg",
        "first-room-27.jpg",
        "first-room-28.jpg",
      ],
      slidesSecond: [
        "second-room-1.jpg",
        "second-room-2.jpg",
        "second-room-3.jpg",
        "second-room-4.jpg",
        "second-room-5.jpg",
        "second-room-6.jpg",
        "second-room-7.jpg",
        "second-room-8.jpg",
        "second-room-9.jpg",
        "second-room-10.jpg",
        "second-room-11.jpg",
      ],
      slidesThird: [
        "third-room-1.jpg",
        "third-room-2.jpg",
        "third-room-3.jpg",
        "third-room-4.jpg",
        "third-room-5.jpg",
        "third-room-6.jpg",
        "third-room-7.jpg",
      ],
      slidesFourth: [
        "fourth-room-1.jpg",
        "fourth-room-2.jpg",
        "fourth-room-3.jpg",
        "fourth-room-4.jpg",
        "fourth-room-5.jpg",
        "fourth-room-6.jpg",
        "fourth-room-7.jpg",
        "fourth-room-8.jpg",
        "fourth-room-9.jpg",
        "fourth-room-10.jpg",
        "fourth-room-11.jpg",
        "fourth-room-12.jpg",
        "fourth-room-13.jpg",
        "fourth-room-14.jpg",
        "fourth-room-15.jpg",
        "fourth-room-16.jpg",
        "fourth-room-17.jpg",
        "fourth-room-18.jpg",
        "fourth-room-19.jpg",
        "fourth-room-20.jpg",
        "fourth-room-21.jpg",
      ],
    };
  },
  computed: {},
  methods: {
    keyNext: function (pictureArr) {
      let slideFirst = this[pictureArr][0];
      this[pictureArr].shift();
      this[pictureArr].push(slideFirst);
    },
    keyPrev: function (pictureArr) {
      let slideLast = this[pictureArr][this[pictureArr].length - 1];
      this[pictureArr].pop();
      this[pictureArr].unshift(slideLast);
    },
  },
};
</script>