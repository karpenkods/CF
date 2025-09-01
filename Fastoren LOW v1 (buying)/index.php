<?php
$cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
$cms->landing(1661, 3056); //topsykey ?>

<!DOCTYPE html>
<html lang="pt" dir="ltr" class="webp webp-alpha webp-animation webp-lossless">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="shortcut icon" type="image/x-icon" href="./icons/favicon.ico" />
  <link rel="icon" type="image/png" sizes="16x16" href="./icons/favicon-16x16.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./icons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="./icons/android-chrome-192x192.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="./icons/apple-touch-icon.png" />

  <title>Fastoren</title>

  <link rel="stylesheet" href="css/new.css" />
  <link rel="stylesheet" href="css/styles.css" />

  <script src="js/scroll.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

  <link rel="icon" href="./images/prod1.webp" type="image/x-icon" />

  <?php $cms->
    header(); ?>
</head>

<body class="timer-different ev-date">
  <img height="1" width="1" src="https://www.facebook.com/tr?id={pixel}&ev=PageView&noscript=1"
    style="position: absolute; opacity: 0; pointer-events: none" />

  <header class="header bg animate-block">
    <img class="logo-main header__logo-main" src="images/logo_white.webp" alt="" width="369" height="39" />
    <div class="header__content">
      <img class="logo header__logo" src="images/logo_black.webp" alt="" width="240" height="25" />
      <ul class="nav header__nav">
        <li class="nav__item">
          <a class="nav__link" href="#about">Información sobre el producto</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#composition">Composición de la innovación</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#reviews">Comentarios de los clientes</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#order">Cómo hacer un pedido</a>
        </li>
      </ul>
      <button class="btn header__btn ever-popup-btn">
        <span class="btn__text">Ordene ahora</span>
      </button>
    </div>
    <button class="burger header__burger">
      <span class="burger__line"></span>
    </button>
  </header>
  <section class="promo block animate-block">
    <div class="container">
      <img class="promo__logo promo-logo" src="images/logo_black.webp" alt="image" width="532" height="55" />
      <h2 class="promo__title">
        <span style="color: #df2b2a">¡Di adiós al dolor articular!</span>
        Recupera tu movilidad con
        <span style="color: #df2b2a">
          <a class="blue-link" href="">Fastoren</a> </span>, la solución definitiva para tus articulaciones.
      </h2>
      <ul class="promo__list promo-list">
        <li class="promo-list__item__check">Articulaciones saludables</li>
        <li class="promo-list__item__check">Libertad de movimiento</li>
        <li class="promo-list__item__check">
          Mejor movilidad y flexibilidad
        </li>
        <li class="promo-list__item__check">Fuerza y actividad</li>
      </ul>
      <div class="promo__pack promo-pack">
        <picture class="promo-pack__prod promo-pack-prod">
          <source type="image/webp" srcset="images/prod1.webp" />
          <img class="promo-pack-prod__img" src="images/prod1.webp" alt="" width="427" height="632" />
        </picture>
      </div>
      <form class="promo__form x_order_form form" action="" method="post">
        <?= $cms->params(); ?>

        <div class="form__content">
          <div class="form__top">
            <h3 class="form__title">
              <span class="text-accent fw500"><?= $cms->discount; ?>% de</span>
              descuento sólo hoy
            </h3>
            <div class="price form__price">
              <div class="price__part price__old">
                <span class="x_price_previous"> <?= $cms->oldpr; ?> </span>
                <span class="x_currency"> <?= $cms->currency; ?> </span>
              </div>
              <div class="price__part price__new text-accent">
                <span class="x_price_current"> <?= $cms->price; ?> </span><span class="x_currency">
                  <?= $cms->currency; ?> </span>
              </div>
            </div>
          </div>
          <div class="form__inputs">
            <label class="form__input-wrap form__input-wrap--name">
              <input class="form__input" placeholder="Nombre" type="text" name="name" minlength="2"
                required="" /></label>

            <label class="form__input-wrap form__input-wrap--phone">
              <input class="form__input" placeholder="Número de teléfono" type="tel" minlength="7" name="phone"
                required="" /></label>
          </div>

          <button class="btn form__btn" type="submit">
            <span class="btn__text">Ordene ahora</span>
          </button>
        </div>
        <p class="form__note">APROBADO EN GUATEMALA</p>
      </form>
      <div class="promo__num"></div>
    </div>
  </section>

  <div class="overlay"></div>
  <section class="doc bg block animate-block" style="margin-bottom: 21px">
    <div class="doc__content">
      <div class="doc__item doc__item--1">
        <div class="doc__wrap">
          <p class="doc__text">
            Soy el Dr. Carlos Méndez, y como especialista en salud, recomiendo
            <a class="blue-link" href="">Fastoren</a> a mis pacientes con
            problemas articulares. Este producto ha demostrado ser efectivo
            para aliviar el dolor y mejorar la movilidad, gracias a sus
            ingredientes naturales.
            <a class="blue-link" href="">Fastoren</a> reduce la inflamación y
            promueve la regeneración de las articulaciones, permitiendo una
            recuperación rápida y segura. ¡Es la solución ideal para quienes
            buscan aliviar el dolor articular y recuperar su calidad de vida!
          </p>
          <h3 class="doc__name">Dr. Carlos Méndez</h3>
          <p class="doc__pos">
            Especialista en medicina deportiva y salud articular con más de 20
            años de experiencia en el tratamiento de lesiones y trastornos
            musculoesqueléticos
          </p>
          <picture class="doc__pic doc__pic--1">
            <img class="doc__img" src="images/doc1.webp" alt="expert" />
          </picture>
        </div>
      </div>
      <div class="doc__item doc__item--2">
        <div class="doc__wrap">
          <p class="doc__text">
            Soy Mariana Pajón, campeona olímpica de BMX, y tras años de
            entrenamiento intensivo, sufrí dolores severos en mis
            articulaciones, especialmente en las rodillas y caderas. Estaba
            pensando en retirarme, ya que el dolor era casi insoportable. Fue
            entonces cuando descubrí
            <a class="blue-link" href="">Fastoren</a>. Después de usarlo, los
            dolores disminuyeron, la inflamación bajó y mi movilidad mejoró
            notablemente. Gracias a <a class="blue-link" href="">Fastoren</a>,
            pude seguir entrenando y compitiendo sin limitaciones. Hoy en día,
            sigo entrenando con la misma pasión y sin miedo a las lesiones. Si
            sufres de dolor en las articulaciones, te recomiendo
            <a class="blue-link" href="">Fastoren</a>. ¡Me ha devuelto la
            oportunidad de seguir haciendo lo que amo!
          </p>
          <h3 class="doc__name">Mariana Pajón</h3>
          <p class="doc__pos">
            Campeón olímpico de BMX en dos ocasiones y figura destacada en
            este deporte
          </p>
          <picture class="doc__pic doc__pic--2">
            <img class="doc__img" src="images/doc2.webp" alt="expert" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="reviews block bg animate-block" id="reviews">
    <div class="container">
      <h2 class="title reviews__title">
        <span class="text-under">Comentarios de
          <a class="blue-link" href="">Fastoren</a>
        </span>
      </h2>
      <ul class="reviews__list reviews-list">
        <li class="reviews-list__item">
          <picture>
            <source type="image/webp" srcset="images/w1.webp" />
            <img class="reviews-list__img" src="images/w1.webp" alt="" width="87" height="87" />
          </picture>
          <h2 class="reviews-list__name">Maria</h2>
          <p class="reviews-list__city"></p>
          <span class="reviews-list__rate"></span>
          <p class="reviews-list__text">
            Siempre tuve problemas en las articulaciones, especialmente en las
            rodillas. El dolor me limitaba mucho en mi vida diaria. Después de
            probar <a class="blue-link" href="">Fastoren</a>, noté una gran
            mejoría. El dolor ha disminuido considerablemente y ahora puedo
            caminar con más facilidad. Estoy muy agradecida por este producto,
            me ha dado una nueva oportunidad para disfrutar de mis actividades
            diarias. ¡Lo recomiendo a todos los que sufren de dolor en las
            articulaciones!
          </p>
          <button class="reviews-list__more">Todos los comentarios...</button>
        </li>
        <li class="reviews-list__item">
          <picture>
            <source type="image/webp" srcset="images/m1.webp" />
            <img class="reviews-list__img" src="images/m1.webp" alt="" width="87" height="87" />
          </picture>
          <h2 class="reviews-list__name">José</h2>
          <p class="reviews-list__city"></p>
          <span class="reviews-list__rate"></span>
          <p class="reviews-list__text">
            Después de otro episodio, mi esposa me trajo
            <a class="blue-link" href="">Fastoren</a> literalmente me obligó a
            aplicarlo. ¡Durante los últimos seis meses ni siquiera podía
            caminar rápido, y mucho menos correr! El dolor en las
            articulaciones comenzó a disminuir de inmediato y todo empezó a
            mejorar. Ahora mis articulaciones se sienten como las de un hombre
            de 30 años.
          </p>
          <button class="reviews-list__more">Todos los comentarios...</button>
        </li>
        <li class="reviews-list__item">
          <picture>
            <source type="image/webp" srcset="images/w2.webp" />
            <img class="reviews-list__img" src="images/w2.webp" alt="" width="87" height="87" />
          </picture>
          <h2 class="reviews-list__name">Ana</h2>
          <p class="reviews-list__city"></p>
          <span class="reviews-list__rate"></span>
          <p class="reviews-list__text">
            Se lo di a mi médico para que leyera los ingredientes, lo aprobó y
            empecé a aplicarlo. Lo primero que noté fue que mi sueño mejoró,
            ya no me despierto por la noche sin motivo. Luego pude agacharme
            sin marearme ni caerme. Dejé de aplicarlo por completo: ¡para qué
            si me siento bien!
          </p>
          <button class="reviews-list__more">Todos los comentarios...</button>
        </li>
        <li class="reviews-list__item">
          <picture>
            <source type="image/webp" srcset="images/m2.webp" />
            <img class="reviews-list__img" src="images/m2.webp" alt="" width="87" height="87" />
          </picture>
          <h2 class="reviews-list__name">Carlos</h2>
          <p class="reviews-list__city"></p>
          <span class="reviews-list__rate"></span>
          <p class="reviews-list__text">
            <a class="blue-link" href="">Fastoren</a> Mi primera experiencia
            con <a class="blue-link" href="">Fastoren</a> fue un fracaso. Lo
            compré en un sitio web falso, hice un tratamiento y no noté ningún
            efecto. Se lo comenté a una amiga que me dijo que sólo debía
            comprar en un sitio donde fuera posible verificar la autenticidad
            del producto. Ahora me doy cuenta de que la primera vez sólo
            recibí un producto falso. Cuando realicé el tratamiento de verdad
            con <a class="blue-link" href="">Fastoren</a>, el efecto fue
            notable.
          </p>
          <button class="reviews-list__more">Todos los comentarios...</button>
        </li>
        <li class="reviews-list__item">
          <picture>
            <source type="image/webp" srcset="images/w3.webp" />
            <img class="reviews-list__img" src="images/w3.webp" alt="" width="87" height="87" />
          </picture>
          <h2 class="reviews-list__name">Carmen</h2>
          <p class="reviews-list__city"></p>
          <span class="reviews-list__rate reviews-list__rate--4"></span>
          <p class="reviews-list__text">
            Soy diabética, lo que me ha llevado a tener problemas articulares,
            y no puedo aplicar muchos medicamentos por el riesgo de efectos
            secundarios. Por eso, antes de comprar
            <a class="blue-link" href="">Fastoren</a>, estudié muy
            detenidamente la información al respecto y pedí información no
            sólo en Internet, sino también a profesionales que conozco. Han
            pasado seis meses desde el tratamiento y me siento muy bien. El
            dolor articular ya no es un problema.
          </p>
          <button class="reviews-list__more">Todos los comentarios...</button>
        </li>
        <li class="reviews-list__item">
          <picture>
            <source type="image/webp" srcset="images/w4.webp" />
            <img class="reviews-list__img" src="images/w4.webp" alt="" width="87" height="87" />
          </picture>
          <h2 class="reviews-list__name">Rosa</h2>
          <p class="reviews-list__city"></p>
          <span class="reviews-list__rate reviews-list__rate--4"></span>
          <p class="reviews-list__text">
            Me convenció su fórmula natural, ¡porque en las pastillas para
            problemas de articulaciones hay un montón de cosas innecesarias!
            Para mi sorpresa, además de reducir el dolor en las
            articulaciones, noté otro efecto: desapareció el dolor de
            estómago, probablemente porque no son pastillas, sino crema.
            ¡Estoy encantado con mi compra!
          </p>
          <button class="reviews-list__more">Todos los comentarios...</button>
        </li>
        <li class="reviews-list__item">
          <picture>
            <source type="image/webp" srcset="images/m3.webp" />
            <img class="reviews-list__img" src="images/m3.webp" alt="" width="87" height="87" />
          </picture>
          <h2 class="reviews-list__name">Juan</h2>
          <p class="reviews-list__city"></p>
          <span class="reviews-list__rate"></span>
          <p class="reviews-list__text">
            No conseguía bajar el colesterol, seguía una dieta especial y me
            tragaba un puñado de pastillas: ¡sin resultados! Me sentía
            miserable, tenía problemas articulares constantemente desde hacía
            años. <a class="blue-link" href="">Fastoren</a> Lo compré más por
            desesperación que por otra cosa. ¡Y funcionó! Después del
            tratamiento, ¡mis articulaciones estaban en excelente estado!
            ¡Tengo ganas de vivir!
          </p>
          <button class="reviews-list__more">Todos los comentarios...</button>
        </li>
        <li class="reviews-list__item">
          <picture>
            <source type="image/webp" srcset="images/w5.webp" />
            <img class="reviews-list__img" src="images/w5.webp" alt="" width="87" height="87" />
          </picture>
          <h2 class="reviews-list__name">Isabel</h2>
          <p class="reviews-list__city"></p>
          <span class="reviews-list__rate"></span>
          <p class="reviews-list__text">
            Tengo un trabajo muy estresante y estoy constantemente estresada y
            preocupada. Buscaba un producto que no sólo fuera eficaz, sino
            también fácil de usar. Durante el día, cuando trabajo, aplicar
            cápsulas no es muy práctico.
            <a class="blue-link" href="">Fastoren</a> Sólo tengo que aplicarlo
            por la mañana y por la noche, lo que resulta muy cómodo. Y el
            efecto es exactamente el que quería: ahora duermo bien y me siento
            menos frustrada por mis problemas.
          </p>
          <button class="reviews-list__more">Todos los comentarios...</button>
        </li>
        <li class="reviews-list__item">
          <picture>
            <source type="image/webp" srcset="images/m4.webp" />
            <img class="reviews-list__img" src="images/m4.webp" alt="" width="87" height="87" />
          </picture>
          <h2 class="reviews-list__name">Miguel</h2>
          <p class="reviews-list__city"></p>
          <span class="reviews-list__rate"></span>
          <p class="reviews-list__text">
            Mi tía y mi abuela murieron a causa de problemas en las
            articulaciones, y recientemente este «asesino silencioso» acabó
            con la vida de mi padre. Seguí un tratamiento para fortalecer las
            articulaciones y estabilizar su estado. En mi caso, considero que
            tratar los problemas de articulaciones no es una moda, sino una
            necesidad.
          </p>
          <button class="reviews-list__more">Todos los comentarios...</button>
        </li>
      </ul>
    </div>
  </section>
  <section class="symptoms block bg animate-block">
    <div class="container">
      <h2 class="title symptoms__title">
        <span class="text-under">Síntomas de problemas articulares</span>
      </h2>
      <ul class="symptoms__list">
        <li class="symptoms__item">Dolor</li>
        <li class="symptoms__item">Rigidez</li>
        <li class="symptoms__item">Inflamación</li>
        <li class="symptoms__item">Hinchazón</li>
        <li class="symptoms__item">Crujidos</li>
        <li class="symptoms__item">Movilidad limitada</li>
        <li class="symptoms__item">Debilidad</li>
        <li class="symptoms__item">Enrojecimiento</li>
        <li class="symptoms__item">Fatiga</li>
        <li class="symptoms__item">Sensación de calor</li>
        <li class="symptoms__item">Deformidad</li>
        <li class="symptoms__item">Espasmos musculares</li>
        <li class="symptoms__item">Bloqueo periódico</li>
        <li class="symptoms__item">Sensación de inestabilidad</li>
        <li class="symptoms__item">Sensibilidad al tacto</li>
      </ul>
      <h3 class="symptoms__subtitle">
        Si presenta alguno de los síntomas anteriores, es posible que tenga
        problemas articulares.
      </h3>
      <p class="symptoms__stat">
        Los problemas articulares afectan la calidad
        <span class="text-accent">de vida de millones de personas en todo el mundo.</span>
      </p>
    </div>
  </section>
  <section class="danger block animate-block">
    <div class="container">
      <h2 class="title danger__title">
        Por qué son peligrosos los problemas articulares
      </h2>
      <ul class="danger__stat stat">
        <li class="stat__item">
          <span class="stat__num text-accent">200</span><span class="stat__unit">millones</span>
          <p class="stat__text">
            de casos de discapacidad relacionados con problemas articulares
          </p>
        </li>
        <li class="stat__item">
          <span class="stat__num text-accent">9,4</span>
          <span class="stat__unit">millones</span>
          <p class="stat__text">
            de personas sufren de dolor articular cada año
          </p>
        </li>
        <li class="stat__item">
          <span class="stat__num text-accent">700</span><span class="stat__unit">millones</span>
          <p class="stat__text">
            de personas no tienen idea de que tienen problemas articulares
          </p>
        </li>
        <li class="stat__item">
          <p class="stat__top">En los últimos</p>
          <span class="stat__num text-accent">30</span><span class="stat__unit">año</span>
          <p class="stat__text">
            años, el número de personas que sufren de problemas articulares se
            ha duplicado
          </p>
        </li>
      </ul>
      <div class="effects">
        <h3 class="effects__title fw500">
          ¿Qué pasa si no tratamos los problemas articulares?
        </h3>
        <ul class="effects__list">
          <li class="effects__item">Artritis</li>
          <li class="effects__item">Dolor articular crónico</li>
          <li class="effects__item">Restricción de movilidad</li>
          <li class="effects__item">Discapacidad</li>
          <li class="effects__item">Deformación de las articulaciones</li>
          <li class="effects__item">Reducción de la calidad de vida</li>
          <li class="effects__item">Problemas de sueño debido al dolor</li>
          <li class="effects__item">
            Pérdida de independencia en la vida diaria
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="helps" id="about">
    <div class="helps__top bg animate-block">
      <div class="container">
        <h2 class="title helps__title">
          <a class="blue-link" href="">Fastoren</a><span>ayuda a olvidar el dolor articular</span>
        </h2>
        <p class="helps__text">
          Los científicos se propusieron desarrollar una fórmula natural que
          fuera eficaz, pero sin los efectos secundarios que suelen tener
          muchos productos sintéticos. En sus investigaciones, centraron su
          atención en ingredientes activos como la camphora, capsaicina y
          aceites esenciales de jengibre, romero y geranio, que aportan
          efectos refrescantes y estimulantes en la piel, mejoran la
          circulación superficial y proporcionan sensación de bienestar y
          suavidad.
        </p>
        <p class="helps__text helps__text--last">
          Los ingredientes aportan efectos visibles sobre la piel, como
          sensación refrescante o cálida, estimulación de la circulación
          superficial y bienestar general. Además, contribuyen a que la piel
          se sienta más suave, cuidada y revitalizada, gracias a las
          propiedades de la camphora, capsaicina y aceites esenciales de
          jengibre, romero y geranio.
        </p>
        <div class="helps__pack helps-pack helps__pack--double">
          <picture class="helps-pack__prod helps-pack-prod">
            <source type="image/webp" media="(min-width:1024px)" srcset="images/prod1.webp" />
            <source media="(min-width:1024px)" srcset="images/prod.png" />
            <source type="image/webp" media="(min-width:320px)" srcset="images/prod1.webp" />
            <source media="(min-width:320px)" srcset="images/prod.png" />
            <img src="images/prod1.webp" alt="" width="300" height="765" />
          </picture>
        </div>
      </div>
    </div>
    <div class="helps__bottom animate-block">
      <div class="container">
        <div class="helps__pack helps-pack">
          <picture class="helps-pack__prod helps-pack-prod">
            <source type="image/webp" media="(min-width:1024px)" srcset="images/prod1.webp" />
            <source media="(min-width:1024px)" srcset="images/prod.png" />
            <source type="image/webp" media="(min-width:320px)" srcset="images/prod1.webp" />
            <source media="(min-width:320px)" srcset="images/prod.png" />
            <img src="images/prod1.webp" alt="" width="300" height="765" />
          </picture>
        </div>
        <form class="helps__form x_order_form form" action="" method="post">
          <?= $cms->params(); ?>

          <div class="form__content">
            <div class="form__top">
              <h3 class="form__title">
                <span class="text-accent fw500"><?= $cms->discount; ?>% de</span>
                descuento sólo hoy:
              </h3>
              <div class="price form__price form__price--border">
                <div class="price__part price__old">
                  <span class="x_price_previous"> <?= $cms->oldpr; ?> </span>
                  <span class="x_currency"> <?= $cms->currency; ?> </span>
                </div>
                <span class="price__div"></span>
                <div class="price__part price__new text-accent">
                  <span class="x_price_current"> <?= $cms->price; ?> </span><span class="x_currency">
                    <?= $cms->currency; ?> </span>
                </div>
              </div>
            </div>
            <div class="form__bottom">
              <div class="form__inputs">
                <label class="form__input-wrap form__input-wrap--name">
                  <input class="form__input" placeholder="Nombre" type="text" name="name" minlength="2"
                    required="" /></label>

                <label class="form__input-wrap form__input-wrap--phone">
                  <input class="form__input" placeholder="Número de teléfono" type="tel" minlength="7" name="phone"
                    required="" /></label>
              </div>

              <button class="btn form__btn" type="submit">
                <span class="btn__text">Ordene ahora</span>
              </button>
            </div>
          </div>
          <p class="form__note">APROBADO EN GUATEMALA</p>
        </form>
      </div>
    </div>
  </section>
  <section class="solve block animate-block">
    <div class="container">
      <h2 class="title solve__title">
        <a class="blue-link" href="">Con Fastoren</a> -
        <span class="text-under">EL DOLOR ARTICULAR DESAPARECERA</span>
      </h2>
      <ul class="solve__list">
        <li class="solve__item">Ayuda a eliminar el dolor articular</li>
        <li class="solve__item">Ayuda a mejorar la movilidad articular</li>
        <li class="solve__item">
          Ayuda a aumentar la flexibilidad articular
        </li>
        <li class="solve__item">
          Ayuda a normalizar el sueño al reducir el dolor
        </li>
        <li class="solve__item">
          Ayuda a aumentar la capacidad de ejercicio
        </li>
        <li class="solve__item">
          Ayuda a aliviar el dolor crónico articular
        </li>
        <li class="solve__item">
          Ayuda a mejorar el estado general de las articulaciones
        </li>
        <li class="solve__item">Ayuda a reducir la inflamación articular</li>
        <li class="solve__item">
          Ayuda a calmar el sistema nervioso al reducir el dolor
        </li>
        <li class="solve__item">
          Ayuda a la función de la memoria al eliminar el malestar
        </li>
        <li class="solve__item">
          Ayuda a mejorar los procesos metabólicos en las articulaciones
        </li>
      </ul>
    </div>
    <div class="wave solve__wave"></div>
  </section>

  <div class="action block--top animate-block">
    <div class="runline action__runline">
      <div class="runline__content">
        <div class="runline__item">
          Oferta especial -
          <?= $cms->discount; ?>%
        </div>
        <div class="runline__item">
          Oferta especial -
          <?= $cms->discount; ?>%
        </div>
        <div class="runline__item">
          Oferta especial -
          <?= $cms->discount; ?>%
        </div>
        <div class="runline__item">
          Oferta especial -
          <?= $cms->discount; ?>%
        </div>
        <div class="runline__item">
          Oferta especial -
          <?= $cms->discount; ?>%
        </div>
      </div>
    </div>
    <div class="container">
      <div class="action__pack">
        <picture class="action__prod">
          <source type="image/webp" srcset="images/prod1.webp" />
          <img class="action__img" src="images/prod1.webp" alt="" width="300" height="749" />
        </picture>
        <p class="form__note">APROBADO EN GUATEMALA</p>
      </div>
      <div class="action__content">
        <form class="promo__form action__form x_order_form form" action="" method="post">
          <?= $cms->params(); ?>

          <div class="form__content">
            <div class="form__top">
              <h3 class="form__title">
                <span class="text-accent"><?= $cms->discount; ?>% de</span>
                descuento sólo hoy:
              </h3>
              <div class="price form__price form__price--border">
                <div class="price__part price__old">
                  <span class="x_price_previous"> <?= $cms->oldpr; ?> </span>
                  <span class="x_currency"> <?= $cms->currency; ?> </span>
                </div>
                <span class="price__div"></span>
                <div class="price__part price__new text-accent">
                  <span class="x_price_current"> <?= $cms->price; ?> </span><span class="x_currency">
                    <?= $cms->currency; ?> </span>
                </div>
              </div>
            </div>
            <div class="form__bottom">
              <div class="form__inputs">
                <label class="form__input-wrap form__input-wrap--name">
                  <input class="form__input" placeholder="Nombre" type="text" name="name" minlength="2"
                    required="" /></label>

                <label class="form__input-wrap form__input-wrap--phone">
                  <input class="form__input" placeholder="Número de teléfono" type="tel" minlength="7" name="phone"
                    required="" /></label>
              </div>

              <button class="btn form__btn" type="submit">
                <span class="btn__text">Ordene ahora</span>
              </button>
            </div>
          </div>
        </form>
        <h3 class="action__subtitle">
          Tras completar el ciclo de tratamiento, pueden obtenerse los
          siguientes resultados:
        </h3>
        <ul class="promo__list promo-list action__list">
          <li class="promo-list__item">
            Articulaciones saludables y mejor movilidad
          </li>
          <li class="promo-list__item">
            Reducción de la inflamación y ausencia de dolor
          </li>
          <li class="promo-list__item">
            Pensamiento claro y buena memoria gracias a la reducción del
            malestar
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section class="composition block animate-block" id="composition">
    <div class="container">
      <h2 class="title composition__title">
        <a class="blue-link" href="">Fastoren</a>
        <span class="text-under">Ingredientes</span> principales
      </h2>
      <div class="composition__wrapper bg">
        <ul class="composition__list composition-list">
          <li class="composition-list__item composition-list__item--1">
            <div class="composition-list__bg">
              <picture class="composition-list__foto"><img class="composition-list__img" src="images/comp1.webp"
                  alt="image" width="652" height="392" />
              </picture>
              <div class="composition-list__content">
                <h3 class="composition-list__title">Cánfora</h3>
                <ul class="slide-list">
                  <li class="slide-list__item">
                    Proporciona una sensación refrescante en la piel
                  </li>
                  <li class="slide-list__item">
                    Ayuda a aliviar irritaciones leves
                  </li>
                  <li class="slide-list__item">
                    Estimula la circulación superficial, mejorando la
                    vitalidad de la piel
                  </li>
                  <li class="slide-list__item">
                    Contribuye a cuidar la piel de agresiones externas,
                    ofreciendo un efecto protector
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="composition-list__item composition-list__item--2">
            <div class="composition-list__bg">
              <picture class="composition-list__foto">
                <img class="composition-list__img" src="images/comp2.webp" alt="image" width="552" height="363" />
              </picture>
              <div class="composition-list__content">
                <h3 class="composition-list__title">Capsaicina</h3>
                <ul class="slide-list">
                  <li class="slide-list__item">
                    Proporciona una sensación cálida y estimulante en la piel
                  </li>
                  <li class="slide-list__item">
                    Ayuda a normalizar el metabolismo de los tejidos
                    articulares
                  </li>
                  <li class="slide-list__item">
                    Ayuda a que la piel se sienta más suave y elástica
                  </li>
                  <li class="slide-list__item">
                    Aporta una sensación de bienestar en la piel
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="composition-list__item composition-list__item--3">
            <div class="composition-list__bg">
              <picture class="composition-list__foto"><img class="composition-list__img" src="images/comp3.webp"
                  alt="image" width="526" height="372" /></picture>
              <div class="composition-list__content">
                <h3 class="composition-list__title">
                  Aceites esenciales de jengibre, romero y geranio
                </h3>
                <ul class="slide-list">
                  <li class="slide-list__item">
                    Aportan un aroma agradable que estimula los sentidos
                  </li>
                  <li class="slide-list__item">
                    Estimulan la circulación superficial, creando sensación de
                    vitalidad en la piel
                  </li>
                  <li class="slide-list__item">
                    Ayudan a que la piel se sienta más suave y cuidada
                  </li>
                  <li class="slide-list__item">
                    Proporcionan sensación de frescura y bienestar en la piel
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="feat block bg animate-block">
    <div class="container">
      <h2 class="title feat__title">
        <span class="text-under">¡LA CREMA QUE SIEMPRE DEBES TENER A MANO!</span>
      </h2>

      <!-- <div class="video-container">
                <center>
  <video controls>
    <source src="images/obzor.mp4" type="video/mp4">

  </video></center>
</div> -->
      <style>
        .video-container {
          /* position: relative;
  padding-bottom: 33.25%; /* Задайте соответствующий соотношение сторон для видео, например, 16:9 = 56.25% (высота/ширина * 100%) */
          /* height: 0;  */
          overflow: hidden;
        }

        .video-container iframe {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
        }
      </style>
      <h3 class="feat__subtitle">
        <a class="blue-link" href="">Fastoren</a> Cada día, este producto
        ayuda a los pacientes resolver sus problemas articulares. Miles de
        personas ya han experimentado su eficacia y se han liberado del dolor
        y la incomodidad articular.
      </h3>
      <div class="feat__table">
        <div class="tr"></div>
      </div>
    </div>
  </section>
  <section class="dynamics block animate-block">
    <div class="container">
      <h2 class="title dynamics__title">
        <a class="blue-link" href="">Fastoren</a> D<span class="text-under">inámica de mejora</span>
        al aplicar
      </h2>
      <div class="dynamics__wrapper">
        <picture>
          <source media="(min-width:1620px)" srcset="fonts/graph.webp" />
          <source media="(min-width:1024px)" srcset="fonts/graph-correct.webp" />
          <img class="dynamics__img" src="fonts/graph.svg" alt="" />
        </picture>
        <ul class="dynamics__list graph">
          <li class="graph__item">
            <h2 class="graph__title">1 semana</h2>
            <p class="graph__text">
              El dolor articular se reduce progresivamente, desaparecen los
              dolores de cabeza, las náuseas y los mareos - eficacia el 95%.
            </p>
          </li>
          <li class="graph__item">
            <h2 class="graph__title">2 semanas</h2>
            <p class="graph__text">
              Mejora la calidad del sueño, aumenta la energía y la fuerza -
              <span class="text-accent fw500">98% de</span> eficacia.
            </p>
          </li>
          <li class="graph__item">
            <h2 class="graph__title">3 semanas</h2>
            <p class="graph__text">
              Reduce la inflamación y mejora la movilidad articular -
              <span class="text-accent fw500">99% de</span> eficacia.
            </p>
          </li>
          <li class="graph__item">
            <h2 class="graph__title">4 semanas</h2>
            <p class="graph__text">
              Estabiliza completamente las articulaciones, mejora la memoria -
              <span class="text-accent fw500">100%</span> eficaz.
            </p>
          </li>
        </ul>
        <ul class="dynamics__legend legend">
          <li class="legend__item">0</li>
          <li class="legend__item">1</li>
          <li class="legend__item">2</li>
          <li class="legend__item">3</li>
          <li class="legend__item">4</li>
          <li class="legend__item">Semana</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="use block bg animate-block">
    <div class="container">
      <h2 class="title use__title">
        <a class="blue-link" href="">Fastoren</a>
        <span class="text-under">Solicitar</span>
      </h2>
      <ul class="use__list use-list">
        <li class="use-list__item">
          <h3 class="use-list__text">
            Aplicar en las zonas afectadas por la mañana y por la noche
          </h3>
        </li>
        <li class="use-list__item">
          <h3 class="use-list__text">Duración del tratamiento - 2 meses</h3>
        </li>
        <li class="use-list__item">
          <h3 class="use-list__text">
            En caso necesario, puede repetirse el tratamiento
          </h3>
        </li>
      </ul>
    </div>
  </section>
  <section class="order block--bottom animate-block">
    <span class="order__anchor" id="order"></span>
    <div class="container">
      <h2 class="title order__title">
        <a class="blue-link" href="">Fastoren</a>
        <span class="text-under">Pedidos a</span>
      </h2>
      <ul class="order__list order-list">
        <li class="order-list__item">
          <h3 class="order-list__title">Rellene el formulario</h3>
          <p class="order-list__text">
            Introduzca su nombre y número de teléfono
          </p>
        </li>
        <li class="order-list__item">
          <h3 class="order-list__title">
            Responder al llamamiento del consejero
          </h3>
          <p class="order-list__text">
            Nuestro asesor comprobará los datos de su dirección y responderá a
            todas sus preguntas.
          </p>
        </li>
        <li class="order-list__item">
          <h3 class="order-list__title">Pago contra entrega</h3>
          <p class="order-list__text">No se requiere pago por adelantado</p>
        </li>
        <li class="order-list__item">
          <h3 class="order-list__title">Utilizar según las instrucciones</h3>
          <p class="order-list__text">¡Buena salud!</p>
        </li>
      </ul>
    </div>
    <div class="wave order__wave"></div>
  </section>

  <div id="scrollhere"></div>
  <div class="promo-last animate-block">
    <section class="promo block">
      <div class="container">
        <img class="promo__logo promo-logo" src="images/logo_white.webp" alt="image" width="532" height="55" />
        <h2 class="promo__title">¡Di adiós al dolor articular!</h2>
        <ul class="promo__list promo-list">
          <li class="promo-list__item__check">Articulaciones saludables</li>
          <li class="promo-list__item__check">Libertad de movimiento</li>
          <li class="promo-list__item__check">
            Mejor movilidad y flexibilidad
          </li>
          <li class="promo-list__item__check">Fuerza y actividad</li>
        </ul>
        <div class="promo__pack promo-pack">
          <picture class="promo-pack__prod promo-pack-prod">
            <source type="image/webp" srcset="images/prod1.webp" />
            <img class="promo-pack-prod__img" src="images/prod1.webp" alt="" width="427" height="632" />
          </picture>
        </div>
        <form class="promo__form x_order_form form" action="" method="post">
          <?= $cms->params(); ?>

          <div class="form__content">
            <div class="form__top">
              <h3 class="form__title">
                <span class="text-accent fw500"><?= $cms->discount; ?>% de</span>
                descuento sólo hoy
              </h3>
              <div class="price form__price">
                <div class="price__part price__old">
                  <span class="x_price_previous"> <?= $cms->oldpr; ?> </span>
                  <span class="x_currency"> <?= $cms->currency; ?> </span>
                </div>
                <div class="price__part price__new text-accent">
                  <span class="x_price_current"> <?= $cms->price; ?> </span><span class="x_currency">
                    <?= $cms->currency; ?> </span>
                </div>
              </div>
            </div>
            <div class="form__inputs">
              <label class="form__input-wrap form__input-wrap--name">
                <input class="form__input" placeholder="Nombre" type="text" name="name" minlength="2"
                  required="" /></label>

              <label class="form__input-wrap form__input-wrap--phone">
                <input class="form__input" placeholder="Número de teléfono" minlength="7" type="tel" name="phone"
                  required="" /></label>
            </div>

            <button class="btn form__btn" type="submit">
              <span class="btn__text">Ordene ahora</span>
            </button>
          </div>
          <p class="form__note">APROBADO EN GUATEMALA</p>
        </form>
      </div>
    </section>
    <div class="runline promo-last__runline">
      <div class="runline__content">
        <div class="runline__item">
          Oferta especial -
          <?= $cms->discount; ?>%
        </div>
        <div class="runline__item">
          Oferta especial -
          <?= $cms->discount; ?>%
        </div>
        <div class="runline__item">
          Oferta especial -
          <?= $cms->discount; ?>%
        </div>
        <div class="runline__item">
          Oferta especial -
          <?= $cms->discount; ?>%
        </div>
        <div class="runline__item">
          Oferta especial -
          <?= $cms->discount; ?>%
        </div>
      </div>
    </div>
    <footer class="footer">
      <!-- <div class="create_rom_footer ev-footer" data-color_text="#555" data-color_link="#555" data-color_logo=""></div> -->
      <span class="date-0" data-format="year"></span>&copy;
    </footer>
  </div>
  <div class="ever-popup-build">
    <div class="popup" id="cloneThis">
      <div class="popup__content">
        <div class="popup__left">
          <picture class="popup__prod">
            <img src="images/prod1.webp" alt="image" width="496" height="696" />
          </picture>
        </div>
        <div class="popup__right">
          <form class="popup__form x_order_form form" action="" method="post">
            <?= $cms->params(); ?>

            <div class="form__content">
              <div class="form__top">
                <h3 class="form__title">
                  <span class="text-accent"><?= $cms->discount; ?>% de</span>
                  descuento sólo hoy
                </h3>
                <div class="price form__price form__price--border">
                  <div class="price__part price__old">
                    <span class="x_price_previous">
                      <?= $cms->oldpr; ?>
                    </span>
                    <span class="x_currency"> <?= $cms->currency; ?> </span>
                  </div>
                  <span class="price__div"></span>
                  <div class="price__part price__new text-accent">
                    <span class="x_price_current"> <?= $cms->price; ?> </span><span class="x_currency">
                      <?= $cms->currency; ?> </span>
                  </div>
                </div>
              </div>
              <div class="form__inputs">
                <label class="form__input-wrap form__input-wrap--name">
                  <input class="form__input" placeholder="Nombre" type="text" name="name" minlength="2"
                    required="" /></label>

                <label class="form__input-wrap form__input-wrap--phone">
                  <input class="form__input" placeholder="Número de teléfono" type="tel" minlength="7" name="phone"
                    required="" /></label>
              </div>

              <button class="btn form__btn" type="submit">
                <span class="btn__text">Ordene ahora</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="ever-popup">
    <div class="ever-popup__inner" style="width: 354px; margin: 372.5px auto 20px">
      <div class="ever-popup__close"></div>
      <div class="popup ever-popup__body">
        <div class="popup__content">
          <div class="popup__left">
            <picture class="popup__prod">
              <img src="images/prod1.webp" alt="image" width="496" height="696" />
            </picture>
          </div>
          <div class="popup__right">
            <form class="popup__form x_order_form form" action="" method="post">
              <?= $cms->params(); ?>

              <div class="form__content">
                <div class="form__top">
                  <h3 class="form__title">
                    <span class="text-accent"><?= $cms->discount; ?>% de</span>
                    descuento sólo hoy
                  </h3>
                  <div class="price form__price form__price--border">
                    <div class="price__part price__old">
                      <span class="x_price_previous">
                        <?= $cms->oldpr; ?>
                      </span>
                      <span class="x_currency"> <?= $cms->currency; ?> </span>
                    </div>
                    <span class="price__div"></span>
                    <div class="price__part price__new text-accent">
                      <span class="x_price_current">
                        <?= $cms->price; ?>
                      </span>
                      <span class="x_currency"> <?= $cms->currency; ?> </span>
                    </div>
                  </div>
                </div>
                <div class="form__inputs">
                  <label class="form__input-wrap form__input-wrap--name">
                    <input class="form__input" placeholder="Nombre" type="text" name="name" minlength="2"
                      required="" /></label>

                  <label class="form__input-wrap form__input-wrap--phone">
                    <input class="form__input" placeholder="Número de teléfono" type="tel" minlength="7" name="phone"
                      required="" /></label>
                </div>

                <button class="btn form__btn" type="sumbit">
                  <span class="btn__text">Ordene ahora</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    .blue-link {
      color: #0070ff !important;
    }
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="js/slick.min.js"></script>

  <?php $cms->footer(); ?>
</body>

</html>