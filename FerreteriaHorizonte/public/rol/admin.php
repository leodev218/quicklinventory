<!-- CABECERA/ HEADER DE LA APP-->
<?php 
include ("../templates/header.php");
session_start();
if(!isset($_SESSION['rol']))
{
    header('location: ../../index.php');
} else 
  {
    if($_SESSION['rol'] = !1)
    {
        header('location: ../../index.php');
    }   
  }


?>

<!-- CUERPO/ BODY DE LA APP-->
ADMINISTADOR
<div class="container-fluid principal">
    <div class="row">
        <!-- BARRA LATERAL IZQUIERDA-->
        <div class="col-12 col-sm-2 col-md-2 col-xl-2 text-white bg-dark" id="sidebar">
         <!-- MENU DE ACORDION-->
                
          <div class="accordion" id="accordionExample">
            <div class="accordion-item mt-4">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Accordion Item #1
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            </div> 
        
      <!-- CONTENIDO PRINCIPAL -->      
    </div>
        <div class="col-12 col-sm-10 col-md-10 col-xl-10 bg-white" id="contenido">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, quod delectus. Ex eaque ab iure saepe impedit quam distinctio aliquam, quidem consequatur, temporibus ratione, laboriosam doloremque ut error odio porro.
        Nemo corporis iure, voluptate officiis nam id inventore accusamus nisi debitis consequuntur animi modi harum! Praesentium saepe doloremque, reiciendis corporis debitis veniam tempore magnam perferendis totam porro neque quasi accusamus!
        Maiores dignissimos reprehenderit sapiente et minus modi, impedit sit iure voluptates voluptas unde consequuntur eveniet adipisci. Harum animi ipsum exercitationem incidunt. Vero placeat non similique, nihil nesciunt perferendis eum officia.
        Consectetur earum nobis impedit voluptate. Alias enim voluptatum pariatur. Perspiciatis aut libero temporibus doloribus nulla, reiciendis facilis ipsum repellendus culpa quisquam, fugit vel? Doloremque, assumenda temporibus a aspernatur delectus ad.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A, quam. Eos consequatur, quasi rem doloremque ducimus numquam expedita accusamus! Quaerat, provident omnis enim architecto laborum error. Consequuntur doloremque maxime repellendus!
        Autem, et. Aut ex nobis eaque. Aperiam quis culpa asperiores dolore beatae, voluptatibus sed eaque ut accusantium laborum tenetur iure a perferendis rerum excepturi. Harum suscipit optio laudantium perferendis id.
        Temporibus aspernatur possimus autem eum libero explicabo? Non maxime consequuntur dolorem pariatur nemo harum iure quae sint, dolor officia nulla repudiandae tempora, perspiciatis expedita! Excepturi quaerat natus aut officiis similique.
        Porro provident autem fugit, beatae commodi recusandae minima? Rerum quas iure, odit optio cupiditate praesentium quam commodi in amet rem illum provident! Voluptatibus, deleniti corrupti perspiciatis id autem similique optio?
        Recusandae id necessitatibus reprehenderit, impedit eum veniam dolore magnam ut vitae eos, quaerat sunt. Est, ipsum, odit rem sit tempore sint quaerat assumenda dicta, maxime ratione consectetur ut similique neque?    
    </div>
    </div>
</div>


<!-- PIE/ FOOTER DE LA APP-->
<?php include ("../templates/footer.php")?>