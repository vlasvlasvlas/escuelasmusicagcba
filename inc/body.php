<body>
    <div id="sidebar" class="sidebar collapsed">
        <!-- Nav tabs -->
        <div class="sidebar-tabs">
            <ul role="tablist">
                <li><a href="#tabhome" role="tab"><i class="fa fa-bars"></i></a></li>
                <li><a href="#tabinfo" role="tab"><i class="fa fa-info-circle"></i></a></li>
				
                
            </ul>

            <ul role="tablist">
                <li><a href="#tabcontacto" role="tab"><i class="fa fa-question-circle"></i></a></li>
            </ul>
			
        </div>

		
        <!-- Tab panes --> 
        <div class="sidebar-content">
		
            <div class="sidebar-pane" id="tabhome">
                <h1 class="sidebar-header"><?php echo $titulo; ?>
                <span class="sidebar-close"><i class="fa fa-caret-left"></i></span>
                </h1>

                <p id="tabhome_contenido">
					<?php echo $texto_inicio; ?>
				</p>

            </div>

            <div class="sidebar-pane" id="tabinfo">
                <h1 class="sidebar-header">Datos de Escuela
				<span class="sidebar-close"><i class="fa fa-caret-left"></i></span>
				</h1>
				
				<p id="tabinfo_contenido">
				Haga click sobre un punto para obtener la información del mismo.
				</p>
				
            </div>

            <div class="sidebar-pane" id="tabcontacto">
                <h1 class="sidebar-header">Sobre el mapa
				<span class="sidebar-close"><i class="fa fa-caret-left"></i></span>
				</h1>
				
				<p id="tabcontacto_contenido">
				Lorem
				</p>
				
            </div>
			
        </div>
    </div>

    <div id="map" class="sidebar-map"></div>

</body>