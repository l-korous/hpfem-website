<?php require_once('header.php');?>

<div class="center">
  <h1> The hp-FEM Group</h1>
  <p>
  The hp-FEM group at the University of Nevada, Reno and 
  University of West Bohemia, Pilsen is concerned with the development, implementation, and 
  dissemination of modern computational methods for engineering and scientific 
  problems described by partial differential equations (PDE). Our work 
  is freely available through several open source projects.
  </p>
  
  <h2>Open Source FEM Software <span style="font-size:0.6em;font-weight:normal;position:relative;bottom:2px;">(hover the mouse over a project to see details underneath)</span></h2>
  <div id="products">
    <div id="product1" class="product" onclick="window.location.href='hermes'" onmouseover="this.style.cursor='pointer';if($('#descHermes2DLong').css('display') != 'block') { $('#descAgrosLong').removeClass('descLongActive');$('#descHermes3DLong').removeClass('descLongActive'); $('#descHermes2DLong').css({opacity: 0.0}).addClass('descLongActive').animate({opacity: 1.0}, 1100, function() {});}">
      <img width="230px" height="230px" src="gallery/images/hermes2d-show/both_errors.png" class="active"/>
      <img width="230px" height="230px" src="gallery/images/hermes2d-show/cand_list_quads.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes2d-show/elast.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes2d-show/dynam-1-mesh.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes2d-show/micro.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes2d-show/g7.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes2d-show/sodium-F-1.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes2d-show/step-conv400.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes2d-show/solinfig9.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes2d-show/neutro_3.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes2d-show/mesh_irreg2.png"/>
    </div>
    <div id="product2" class="product" onclick="window.location.href='agros2d'" onmouseover="this.style.cursor='pointer';if($('#descAgrosLong').css('display') != 'block') { $('#descHermes2DLong').removeClass('descLongActive');$('#descHermes3DLong').removeClass('descLongActive');$('#descAgrosLong').css({opacity: 0.0}).addClass('descLongActive').animate({opacity: 1.0}, 1100, function() {});}">
      <img height="230px" src="gallery/images/agros2d-show/screenshot_ubuntu_oneiric_heat-170x170.png" class="active"/>
      <img height="230px" src="gallery/images/agros2d-show/screenshot_ubuntu_oneiric_particle_tracing-170x170.png"/>
      <img height="230px" src="gallery/images/agros2d-show/screenshot_ubuntu_oneiric_pythonlab-170x170.png"/>
      <img height="230px" src="gallery/images/agros2d-show/screenshot_kubuntu_precise_chart-170x170.png"/>
      <img height="230px" src="gallery/images/agros2d-show/screenshot_kubuntu_precise_pythonlab-170x170.png"/>
			<img height="230px" src="gallery/images/agros2d-show/screenshot_win7_levitation-170x170.png"/>
      <img height="230px" src="gallery/images/agros2d-show/screenshot_winxp_problem_properties-170x170.png"/>
      <img height="230px" src="gallery/images/agros2d-show/screenshot_macosx_heat_detail-170x170.png"/>
      <img height="230px" src="gallery/images/agros2d-show/screenshot_macosx_order-170x170.png"/>
      <img height="230px" src="gallery/images/agros2d-show/postprocessor_scalarview_3d-170x170.png"/>
    </div>
    <div id="product3" class="product" onclick="window.location.href='hermes'" onmouseover="this.style.cursor='pointer';if($('#descHermes3DLong').css('display') != 'block') { $('#descAgrosLong').removeClass('descLongActive');$('#descHermes2DLong').removeClass('descLongActive');$('#descHermes3DLong').css({opacity: 0.0}).addClass('descLongActive').animate({opacity: 1.0}, 1100, function() {});}">
      <img width="230px" height="230px" src="gallery/images/hermes3d-show/bessel-sln.png" class="active"/>
      <img width="230px" height="230px" src="gallery/images/hermes3d-show/layer-mesh.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes3d-show/layer-sln.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes3d-show/fichera-mesh.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes3d-show/fichera-sln.png"/>
      <img width="230px" height="230px" src="gallery/images/hermes3d-show/shock-sln.png"/>
    </div>
  </div>
  <div id="productDesc">
    <div id="descHermes" class="descTitle" onmouseover="if($('#descHermes2DLong').css('display') != 'block') { $('#descAgrosLong').removeClass('descLongActive');$('#descHermes3DLong').removeClass('descLongActive');$('#descHermes2DLong').css({opacity: 0.0}).addClass('descLongActive').animate({opacity: 1.0}, 1100, function() {});}">
      Hermes2D
    </div>
    <div id="descAgros" class="descTitle" onmouseover="if($('#descAgrosLong').css('display') != 'block') { $('#descHermes2DLong').removeClass('descLongActive');$('#descHermes3DLong').removeClass('descLongActive');$('#descAgrosLong').css({opacity: 0.0}).addClass('descLongActive').animate({opacity: 1.0}, 1100, function() {});}">
       	Agros2D
    </div>
    <div id="descHermes3D" class="descTitle" onmouseover="if($('#descHermes3DLong').css('display') != 'block') { $('#descAgrosLong').removeClass('descLongActive');$('#descHermes2DLong').removeClass('descLongActive');$('#descHermes3DLong').css({opacity: 0.0}).addClass('descLongActive').animate({opacity: 1.0}, 1100, function() {});}">
      Hermes3D
    </div>
   
  </div> 
  <div id="descLong">
    <div id="descHermes2DLong" class="descLong descLongActive">
      <h3>Hermes2D - advanced hp-FEM &amp; hp-DG C++ library</h3>
      Hermes is a C++ library for rapid development of adaptive hp-FEM / hp-DG solvers. Novel hp-adaptivity algorithms are designed to solve a large variety of problems ranging from ODE and stationary linear PDE to complex time-dependent nonlinear multiphysics PDE systems. The code is distributed under the GNU General Public License (Hermes2D and Hermes3D) and BSD License (Hermes1D).
    </div>
    <div id="descAgrosLong" class="descLong">
      <h3>Agros2D - graphical PDE Engineering tool</h3>
      Agros2D is a multiplatform C++ application for the solution of partial differential equations (PDE) based on the Hermes library, developed by the group at the University of West Bohemia in Pilsen. Agros2D is distributed under the GNU General Public License.
    </div>
    <div id="descHermes3DLong" class="descLong">
      <h3>Hermes3D - C++ library of adaptive hp-FEM methods for 3D problems</h3>
      The aim of Hermes3D is to extend the capabilities of Hermes2D to three spatial dimensions.
      In particular, Hermes3D will offer automatic adaptive hp-FEM with arbitrary-level
      hanging nodes, monolithic multimesh discretization of multiphysics coupled
      problems, and adaptive hp-FEM with dynamically changing meshes for 3D
      problems. The development had started and has been temporarily put on hold.
    </div>
  </div>

  <script type="text/javascript">
    function slideSwitch1() {
        var $active = $('#product1 IMG.active');
        var $next =  $active.next().length ? $active.next()
        : $('#product1 IMG:first');

        $active.addClass('last-active');

        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 800, function() {
                $active.removeClass('active last-active');
            });
    }
    function slideSwitch2() {
        var $active = $('#product2 IMG.active');
        var $next =  $active.next().length ? $active.next()
        : $('#product2 IMG:first');

        $active.addClass('last-active');

        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 800, function() {
                $active.removeClass('active last-active');
            });
    }
    function slideSwitch3() {
        var $active = $('#product3 IMG.active');
        var $next =  $active.next().length ? $active.next()
        : $('#product3 IMG:first');

        $active.addClass('last-active');

        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 800, function() {
                $active.removeClass('active last-active');
            });
    }

    $(function() {
        setInterval( "slideSwitch1()", 4500 );
        setTimeout('setInterval( "slideSwitch2()", 4500 )', 1500);
        setTimeout('setInterval( "slideSwitch3()", 4500 )', 3000);
    });
  </script>
  
  <div style="clear:both"></div>
  <h2>Core Team</h2>
  <table>
    <tr style="vertical-align:top;">
    <td>
    <a href="http://hpfem.org/~pavel/">
      <img src="people/photos/pavel-hpfem.org.jpg" width=118px style="border:1px solid black" height=118px title="Pavel Solin (group leader, NCLab)">
    </a>
    </td>
    <td>
    <a href="http://home.zcu.cz/~karban/main/">
      <img src="people/photos/karban.jpg" width=118px style="border:1px solid black" height=118px title="Pavel Karban (Agros2D main developer)">
    </a>
    </td>
    <td>
    <a href="#">
      <img src="people/photos/lukas.jpg" width=118px style="border:1px solid black" height=118px title="Lukas Korous (Hermes main developer)">
    </a>
    </td>
    <td>
    <a href="#">
      <img src="people/photos/pavel_kus.jpg" width=118px style="border:1px solid black" height=118px title="Pavel Kus (Agros2D, Hermes3D)">
    </a>
    </td>
    <td>
    <a href="http://home.zcu.cz/~fmach">
      <img src="people/photos/franta_small.jpg" width=118px style="border:1px solid black" height=118px title="Franta Mach (Agros2D)">
    </a>
    </td>
    <td>
    <a href="#">
      <img src="people/photos/panek.jpg" width=118px style="border:1px solid black" height=118px title="David P�nek (Agros2D)">
    </a>
    </td>
    </tr>
    <tr style="vertical-align:top;">
      <td><span style="font-weight:bold">Pavel Solin</span><br />(UNR group leader)</td>
      <td><span style="font-weight:bold">Pavel Karban</span><br />(Agros2D main developer, UWB group leader)</td>
			<td><span style="font-weight:bold">Lukas Korous</span><br />(Hermes2D main developer)</td>
      <td><span style="font-weight:bold">Pavel Kus</span><br />(Agros2D, Hermes3D)</td>
      <td><span style="font-weight:bold">Franta Mach</span><br />(Agros2D, Hermes2D)</td>
      <td><span style="font-weight:bold">David Pánek</span><br />(Agros2D, Hermes2D)</td>
    </tr>
  </table>

  <h3>International Conferences ESCO and FEMTEC</h3>

  <p>
  We organize two series of international conferences: European Seminar on Coupled Problems (ESCO
  <a href="http://esco2012.femhub.com">2012</a>, 
  <a href="http://hpfem.org/events/esco-2010/">2010</a>, 
  <a href="http://hpfem.org/events/esco-2008/">2008</a>) 
  in Europe and Finite Element Methods in Engineering 
  and Science (FEMTEC
  <a href="http://hpfem.org/events/femtec-2011/">2011</a>, 
  <a href="http://hpfem.org/events/femtec-2009/">2009</a>, 
  <a href="http://hpfem.org/events/femtec-2006/">2006</a>) in the U.S.

  </p>

  <h3>Use Hermes through NCLab</h3>

  <p>
	Hermes in its older (serial) version can be used in online tool <a href="http://www.nclab.com" target="blank">NCLab</a> thanks to <a href="http://www.github.com/hpfem/hermes-python" target="blank">Python wrappers</a> <span style="font-weight:bold;">(for the serial version)</span>.
  <center>
  <a href="https://nclab.com">
  <img align="center" src="main/images/nclab-1.png" width="200" 
  style="padding:5px; margin-right:5px; border-style:none">
  <img align="center" src="main/images/nclab-2.png" width="200"
  style="padding:5px; margin-right:5px; border-style:none"><br>
  <img align="center" src="main/images/nclab-3.png" width="200" 
  style="padding:5px; margin-right:5px; border-style:none">
  <img align="center" src="main/images/nclab-4.png" width="200"
  style="padding:5px; margin-right:5px; border-style:none">
  </a>
  </center>
  <p>
  <a href="http://www.nclab.com" target="blank">NCLab</a> is a third-party product that is not developed by our group at UNR.
<!--
  <h3>The Dark Side of FEM</h3>

  <p>
  Do not format your harddisk yet! If the science is not
  working, maybe it's art. Visit our art gallery 
  <a href="gallery_darkside">Dark Side of FEM</a> :)
  </p>
-->
</div>

<?php require_once('right-latest.php');?>
<?php require_once('footer.php');?>
