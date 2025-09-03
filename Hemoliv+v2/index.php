<?php
$cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
$cms->landing( 1686, 3052 ); //topsykey ?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />

    <title>Hemoliv</title>

    <link rel="shortcut icon" href="files/product.webp" type="image/png" />

    <link rel="stylesheet" href="files/style2.css" />
    <link rel="stylesheet" href="files/media2.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="js/scroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <?php $cms->
    header(); ?>
  </head>

  <body>
    <div class="block1">
      <section class="wrapper">
        <div class="b1_list">
          <header>
            <h3 class="lt0"><a href="">CÁPSULAS HEMOLIV+</a></h3>
            <h1 class="lt1">
              <span>TRATAMIENTO EFICAZ DE LAS HEMORROIDES</span> EN CUALQUIER
              FASE
            </h1>
            <p class="lt2">
              EL DOLOR Y EL PICOR DESAPARECEN<br />DENTRO DE
              <span>30 DÍAS.</span>
            </p>
          </header>
          <ul>
            <li class="lt3">Alivia el dolor, el ardor y el picor</li>
            <li class="lt4">
              Acelera la reabsorci&oacute;n de los n&oacute;dulos hemorroidales
            </li>
            <li class="lt5">Previene la reaparici&oacute;n de la enfermedad</li>
          </ul>
        </div>
        <div class="wrapper_flex">
          <div class="b1_price_timer">
            <div class="b1_price">
              <p class="b1_price_old lt6">
                Precio anterior:<br /><span class="price_old"
                  ><span class="price_main_value"> <?=$cms->oldpr;?> </span>
                  <span class="price_main_currency">
                    <?=$cms->currency;?>
                  </span></span
                >
              </p>
              <p class="b1_price_new lt7">
                Nuevo precio:<br /><span class="price_main"
                  ><span class="price_main_value"> <?=$cms->price;?> </span>
                  <span class="price_main_currency">
                    <?=$cms->currency;?>
                  </span></span
                >
              </p>
            </div>
            <div class="b1_timer">
              <p class="lt8">LA PROMOCI&Oacute;N FINALIZA EN:</p>
              <div class="timerSH">
                <span class="hoursSH">09</span
                ><span class="dotTimer lt9">:</span
                ><span class="minutesSH">13</span
                ><span class="dotTimer lt10">:</span
                ><span class="secondsSH">26</span>
              </div>
            </div>
            <img alt="" class="product_pic" src="files/product.webp" />
          </div>
          <div class="b1_form">
            <form action="" class="order_form" method="post">
              <?=$cms->params();?>

              <div class="form_item">
                <input
                  name="name"
                  placeholder="Nombre"
                  minlength="2"
                  required=""
                  type="text"
                />
              </div>
              <div class="form_item">
                <input
                  name="phone"
                  minlength="7"
                  placeholder="N&uacute;mero de tel&eacute;fono"
                  required=""
                  type="tel"
                />
              </div>
              <div class="form_item">
                <button class="btn lt11" type="submit">REALIZAR PEDIDO*</button>
              </div>
              <div class="form_item">
                <p class="lt12">*Confidencialidad garantizada</p>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
    <div class="block2">
      <section class="wrapper">
        <div class="b2_img"><img alt="" src="files/b2_woman.webp" /></div>
        <div class="b2_text">
          <h2 class="lt13">
            S&Aacute;LVESE<br />DE LA ENFERMEDAD<br /><span
              > DE UNA VEZ POR TODAS</span
            >
          </h2>
          <p class="lt14">
            Las hemorroides provocan las sensaciones m&aacute;s desagradables y
            muy dolorosas, interfieren en el modo normal de vida. Sin
            tratamiento, la enfermedad siempre progresa r&aacute;pidamente y
            crece hasta que los n&oacute;dulos hemorroidales no pueden ser
            tratados.
          </p>
          <p class="b2_important lt15">
            Est&aacute; demostrado que las hemorroides pueden derivar en
            c&aacute;ncer de recto entre 1 y 3 a&ntilde;os despu&eacute;s de la
            aparici&oacute;n de los primeros s&iacute;ntomas.
          </p>
          <p class="lt16">
            No espere a que el dolor se vuelva insoportable, aparezcan fisuras
            anales que no cicatrizan y empiecen a aparecer n&oacute;dulos.
            Inicie el tratamiento de inmediato.
          </p>
        </div>
      </section>
    </div>
    <div class="block3">
      <section class="wrapper">
        <h2 class="lt17">
          <span> <a href="">Hemoliv+</a> </span> es lo que te ayudar&aacute;
        </h2>
        <div class="wrapper_flex">
          <div class="b3_list b3_list1">
            <ul>
              <li>
                <span class="lt18"
                  >Alivia el dolor, la picazón y la sensación de ardor</span
                >
              </li>
              <li>
                <span class="lt19"
                  >Para las hemorragias sin riesgo de co&aacute;gulos</span
                >
              </li>
              <li>
                <span class="lt20"
                  >Normaliza el tono y refuerza las paredes venosas</span
                >
              </li>
              <li>
                <span class="lt21"
                  >Reduce la hinchaz&oacute;n y la inflamaci&oacute;n, elimina
                  la congesti&oacute;n</span
                >
              </li>
            </ul>
          </div>
          <img alt="" class="b3_product" src="files/product.webp" />
          <div class="b3_list b3_list2">
            <ul>
              <li>
                <span class="lt22"
                  >Cura incluso grietas internas profundas</span
                >
              </li>
              <li>
                <span class="lt23"
                  >Acelera la regeneraci&oacute;n del tejido da&ntilde;ado</span
                >
              </li>
              <li>
                <span class="lt24"
                  >Reduce el n&uacute;mero de n&oacute;dulos hemorroidales</span
                >
              </li>
              <li>
                <span class="lt25"
                  >GARANTIZA UNA R&Aacute;PIDA RECUPERACI&Oacute;N</span
                >
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
    <div class="block4">
      <section class="wrapper">
        <div class="b4_text">
          <h2 class="lt26">
            <span>ALTERNATIVA NATURAL A</span> LOS M&Eacute;TODOS DE TRATAMIENTO
            RADICALES
          </h2>
          <p class="lt27">
            ¿Recuerda su vida sin hemorroides? Volverá a ella en cuanto empiece
            a tomar las cápsulas <a href="">«Hemoliv+»</a>.
          </p>
          <p class="lt28">
            Sin gastos expr&eacute;s en tratamientos proctol&oacute;gicos, sin
            medicamentos caros ni cirug&iacute;as traum&aacute;ticas.
          </p>
          <ul class="wrapper_flex">
            <li class="lt29">Presentación en cápsulas, fácil de ingerir</li>
            <li class="lt30">Alivio después de la primera semana de uso</li>
            <li class="lt31">Nada de situaciones inc&oacute;modas.</li>
          </ul>
        </div>
        <div class="b4_img"><img alt="" src="files/b4_couple.webp" /></div>
      </section>
    </div>
    <div class="block5">
      <section class="wrapper">
        <h2 class="lt32">CONTENIDO <span>100%</span> NATURAL</h2>
        <h3 class="lt33">
          <a href="">Hemoliv+</a> contiene ingredientes naturales que eliminan suavemente las
          molestias y otros s&iacute;ntomas de la enfermedad, al tiempo que
          ejercen un efecto terap&eacute;utico sobre la causa del problema.
        </h3>
        <div class="ingredients">
          <!-- Slider main container -->
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="ingr">
                  <img alt="" src="files/ing01.webp" />
                  <h3 class="lt50">Alivio de la inflamación y la hinchazón:</h3>
                  <p class="lt51">
                    El Ginkgo biloba mejora la circulación sanguínea, lo que
                    ayuda a reducir la hinchazón y favorece la eliminación de
                    toxinas acumuladas en la zona afectada. Gracias a sus
                    propiedades, contribuye a aliviar la inflamación y el
                    malestar, apoyando la recuperación natural de los tejidos y
                    mejorando la sensación de confort diario.
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="ingr">
                  <img alt="" src="files/ing02.webp" />
                  <h3 class="lt34">
                    Fortalecimiento de las venas y alivio de la pesadez:
                  </h3>
                  <p class="lt35">
                    El extracto de castaño de Indias fortalece las paredes de
                    las venas, ayudando a reducir la sensación de pesadez y
                    mejorando la circulación. Gracias a sus propiedades,
                    contribuye a mantener la salud vascular y a prevenir
                    complicaciones asociadas con las hemorroides.
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="ingr">
                  <img alt="" src="files/ing03.webp" />
                  <h3 class="lt36">Alivio e hidratación de los tejidos:</h3>
                  <p class="lt37">
                    El romero posee propiedades antiinflamatorias y calmantes,
                    ayudando a reducir la irritación y el malestar en la zona
                    afectada. La malva contribuye a la regeneración de los
                    tejidos y alivia la irritación, favoreciendo la recuperación
                    natural y aumentando la sensación de confort.
                  </p>
                </div>
              </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <style>
            .swiper {
              width: 100%;
              height: 100%;
            }
            .swiper-button-next:after,
            .swiper-button-prev:after {
              color: #000;
            }
          </style>
          <script>
            const swiper = new Swiper(".swiper", {
              // Optional parameters
              direction: "horizontal",
              loop: true,
              slidesPerView: 1,
              spaceBetween: 30,

              // Navigation arrows
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              breakpoints: {
                1259: {
                  slidesPerView: 3,
                  spaceBetween: 20,
                },
              },
            });
          </script>
        </div>
      </section>
    </div>
    <div class="block6">
      <section class="wrapper">
        <h2 class="lt52">OPINI&Oacute;N DE EXPERTOS</h2>
        <div class="b6_doctor wrapper_flex">
          <div class="b6_doctor_opinion">
            <img alt="" class="b6_doctor_pic_mob" src="files/doctor_mob.webp" />
            <p class="lt53">
              Los f&aacute;rmacos modernos para el tratamiento de las
              hemorroides son mucho peores que los remedios naturales en cuanto
              a su efecto sobre la ra&iacute;z de la enfermedad. Las sustancias
              qu&iacute;micas reducen la absorci&oacute;n de la sustancia activa
              y provocan diversos efectos secundarios: aumento del picor,
              hinchaz&oacute;n, reacciones al&eacute;rgicas.
            </p>
            <p class="lt54">
              En este sentido, <a href="">«Hemoliv+»</a> es el tratamiento más eficaz para las
              hemorroides en cualquier etapa: su fórmula contiene únicamente
              componentes naturales y su absorción es del 99,7%. Las cápsulas no
              presentan efectos secundarios, no provocan reacciones alérgicas y
              son fáciles de tomar.
            </p>
            <p class="lt55">
              Como m&eacute;dico con 20 a&ntilde;os de experiencia en
              proctolog&iacute;a, recomiendo <a href="">Hemoliv+</a> para el tratamiento de las
              hemorroides en cualquier fase de la enfermedad.
            </p>
          </div>
          <div class="b6_doctor_sign">
            <p class="lt56">
              <span>Alejandro Rivera</span><br />Doctor en Proctolog&iacute;a
              con 20 a&ntilde;os de experiencia cl&iacute;nica, Doctor en
              Medicina
            </p>
          </div>
          <img alt="" class="b6_doctor_pic" src="files/doctor.webp" />
        </div>
      </section>
    </div>
    <div class="block7">
      <section class="wrapper">
        <h2 class="lt57">VENTAJAS del medicamento <a href="">Hemoliv+</a></h2>
        <div class="b7_plus b7_plus1 wrapper_flex">
          <div>
            <img alt="" src="files/b7_plus1.webp" />
            <h3 class="lt58">Facilidad de uso</h3>
            <p class="lt59">Tomar 2 cápsulas al día, durante las comidas</p>
          </div>
          <div>
            <img alt="" src="files/b7_plus2.webp" />
            <h3 class="lt60">Contenido natural</h3>
            <p class="lt61">
              Contiene s&oacute;lo ingredientes naturales, sin productos
              qu&iacute;micos peligrosos ni hormonas
            </p>
          </div>
          <div>
            <img alt="" src="files/b7_plus3.webp" />
            <h3 class="lt62">Seguridad</h3>
            <p class="lt63">
              Sin efectos secundarios, puede utilizarse a largo plazo
            </p>
          </div>
        </div>
        <div class="b7_plus b7_plus2 wrapper_flex">
          <div>
            <img alt="" src="files/b7_plus4.webp" />
            <h3 class="lt64">Resultado a largo plazo</h3>
            <p class="lt65">
              El tratamiento pondr&aacute; fin inmediatamente a todas las
              manifestaciones de las hemorroides*.
            </p>
            <p class="b7_note lt66">
              * la duraci&oacute;n del ingreso se calcula individualmente
            </p>
          </div>
          <div>
            <img alt="" src="files/b7_plus5.webp" />
            <h3 class="lt67">Curso de aplicación</h3>
            <p class="lt68">
              Para lograr un alivio estable, se recomienda un uso continuo de al
              menos 30 días
            </p>
          </div>
        </div>
      </section>
    </div>
    <div class="block8">
      <section class="wrapper">
        <h2 class="lt69">COMENTARIOS DE LOS PACIENTES</h2>
        <div class="wrapper_flex reviews">
          <div>
            <img
              alt=""
              src="files/review1.webp"
              width="52"
              height="52"
              style="border-radius: 15px"
            />
            <h4 class="lt70">
              Javier Mart&iacute;nez<span>,44 a&ntilde;os:</span>
            </h4>
            <p class="lt71">
              Compré <a href="">«Hemoliv+»</a> en este sitio. No tuve ningún efecto secundario.
              Después de 4 semanas, las hemorroides desaparecieron por completo,
              los bultos se fueron y también se quitó el dolor al ir al baño.
              Lamento haber tardado tanto en empezar a usar <a href="">«Hemoliv+»</a> para el
              tratamiento.»
            </p>
          </div>
          <div>
            <img
              alt=""
              src="files/review2.webp"
              width="52"
              height="52"
              style="border-radius: 15px"
            />
            <h4 class="lt72">
              Carlos Fern&aacute;ndez<span>,36 a&ntilde;os:</span>
            </h4>
            <p class="lt73">
              «Mi mayor bulto desapareció en sólo un mes de uso de <a href="">Hemoliv+</a> u dos
              veces al día. Ya no tengo problemas para ir al baño, no
              experimento ninguna molestia, puedoAhora puedo permanecer sentado
              durante largos periodos de tiempo, lo cual es importante para mí
              porque paso muchas horas al volante.»
            </p>
          </div>
          <div>
            <img
              alt=""
              src="files/review3.webp"
              width="52"
              height="52"
              style="border-radius: 15px"
            />
            <h4 class="lt74">
              Mar&iacute;a Rodr&iacute;guez<span>, 33 a&ntilde;os:</span>
            </h4>
            <p class="lt75">
              «Un año después de dar a luz, desarrollé un problema tan delicado
              como las hemorroides. Tenía mucho dolor, no podía cuidar bien a mi
              bebé. <a href="">Hemoliv+</a> Me ayudó mucho, las grietas y los nódulos
              desaparecieron.»
            </p>
          </div>
        </div>
      </section>
    </div>
    <div class="block9">
      <div id="scrollhere"></div>
      <section class="wrapper">
        <div class="b1_list">
          <header>
            <h3 class="lt76"><a href="">CÁPSULAS HEMOLIV+</a></h3>
            <h1><span class="lt77">&iexcl;ACABA CON TU SUFRIMIENTO!</span></h1>
            <p class="lt78">
              <a href="">Hemoliv+</a> te librar&aacute;<br />hemorroides para siempre
            </p>
          </header>
          <ul>
            <li class="lt79">Tratamiento eficaz de las hemorroides</li>
            <li class="lt80">
              Alivio r&aacute;pido del dolor y otros s&iacute;ntomas
            </li>
            <li class="lt81">Resultado persistente tras el tratamiento</li>
          </ul>
        </div>
        <div class="wrapper_flex">
          <div class="b1_price_timer">
            <div class="b1_price">
              <p class="b1_price_old lt82">
                Precio anterior:<br /><span class="price_old"
                  ><span class="price_main_value"> <?=$cms->oldpr;?> </span>
                  <span class="price_main_currency">
                    <?=$cms->currency;?>
                  </span></span
                >
              </p>
              <p class="b1_price_new lt83">
                Nuevo precio:<br /><span class="price_main"
                  ><span class="price_main_value"> <?=$cms->price;?> </span>
                  <span class="price_main_currency">
                    <?=$cms->currency;?>
                  </span></span
                >
              </p>
            </div>
            <div class="b1_timer">
              <p class="lt84">LA PROMOCI&Oacute;N FINALIZA EN:</p>
              <div class="timerSH">
                <span class="hoursSH">09</span
                ><span class="dotTimer lt85">:</span
                ><span class="minutesSH">13</span
                ><span class="dotTimer lt86">:</span
                ><span class="secondsSH">26</span>
              </div>
            </div>
            <img alt="" class="product_pic" src="files/product.webp" />
          </div>
          <div class="b1_form">
            <form action="" class="order_form" id="order_form" method="post">
              <?=$cms->params();?>

              <div class="form_item">
                <input
                  name="name"
                  minlength="2"
                  placeholder="Nombre"
                  required=""
                  type="text"
                />
              </div>
              <div class="form_item">
                <input
                  name="phone"
                  minlength="7"
                  placeholder="N&uacute;mero de tel&eacute;fono"
                  required=""
                  type="tel"
                />
              </div>
              <div class="form_item">
                <button class="btn lt87" type="submit">REALIZAR PEDIDO*</button>
              </div>
              <div class="form_item">
                <p class="lt88">*Confidencialidad garantizada</p>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
    <footer>
      <section class="wrapper">
        <p class="lt89">© 2025 Todos los derechos reservados.</p>
      </section>
    </footer>
    <script src="./js/date.js"></script>

    <div id="lf__holder_left" class="lf__holder-left"></div>
    <div id="lf__holder_right" class="lf__holder-right"></div>

    <?php $cms->footer(); ?>
  </body>
</html>
