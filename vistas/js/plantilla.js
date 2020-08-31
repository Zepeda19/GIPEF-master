function cambia()
{
  var nivel, grado, competencia, apre;
  //var niveII, gradoII, competenciaII, apreII;
  nivel=document.form1.nivel[document.form1.nivel.selectedIndex].value;
 // niveII=document.form2.niveII[document.form2.niveII.selectedIndex].value;

  var grado_1 = new Array("NA");
  var grado_2 = new Array("1ro","2do","3ro","4to","5to","6to");
  var grado_3 = new Array("1ro","2do","3ro");
  var grado_4 = new Array("1ro","2do","3ro");
  var grado_5 = new Array("1ro","2do","3ro");


  var competencia_1 = new Array("Desarrollo de la motricidad","Integración de la corporeidad","Creatividad en la acción motriz");
  var competencia_2 = new Array("Desarrollo de la motricidad","Integración de la corporeidad","Creatividad en la acción motriz");
  var competencia_3 = new Array("Desarrollo de la motricidad","Integración de la corporeidad","Creatividad en la acción motriz");
  var competencia_4 = new Array("Desarrollo de la motricidad","Integración de la corporeidad","Creatividad en la acción motriz");
  var competencia_5 = new Array("Desarrollo de la motricidad","Integración de la corporeidad","Creatividad en la acción motriz");
   //se revisa si la cosa esta definida

  if(nivel!=0)
  {
   //selecciona las cosas correcta
  mis_grados=eval("grado_"+ nivel);
  num_grados=mis_grados.length;

  mis_competencias=eval("competencia_"+nivel);
  nums_competencias=mis_competencias.length;
  //marco el numero de opciones en el select
  document.form1.grado.length = num_grados;
  document.form1.competencia.length = nums_competencias;

  //para cada opcion del array se coloca en el select
  for(i=0;i<num_grados;i++)
  {
    document.form1.grado.options[i].value = i+1;
    document.form1.grado.options[i].text = mis_grados[i];
  }
  for(i=0;i<nums_competencias;i++)
  {
    document.form1.competencia.options[i].value = i+1;
    document.form1.competencia.options[i].text = mis_competencias[i];
  }
      //optener texto
       var niveel = document.getElementById("niv");
       var sele = niveel.options[niveel.selectedIndex].text;
       var texto = document.getElementById('Nivel').value = sele;

       var gradd = document.getElementById("grrr");
       var grr = gradd.options[gradd.selectedIndex].text;
       var texto2 = document.getElementById('Grado').value = grr;

       var comppe = document.getElementById("competenci");
       var ccomppe = comppe.options[comppe.selectedIndex].text;
       var texto3 = document.getElementById('Compete').value = ccomppe;

      grado = document.form1.grado[document.form1.grado.selectedIndex].value; 
      apre = document.form1.apre[document.form1.apre.selectedIndex].value; 
      competencia = document.form1.competencia[document.form1.competencia.selectedIndex].value;

    switch (nivel)
      {
        case "1":
    	   if( grado == 1 && competencia == 1)
    	   {
    		    document.form1.apre.options[0].text = 'Realiza movimientos de locomoción, manipulación y estabilidad, por medio de juegos individuales y colectivos.';
    		    document.form1.apre.options[1].text = "Utiliza herramientas, instrumentos y materiales en actividades que requieren de control y precisión en sus movimientos.";
    	   }
    		else if(grado == 1 && competencia == 2)
    		{
    			document.form1.apre.options[0].value = "1";
    			document.form1.apre.options[0].text = 'Identifica sus posibilidades expresivas y motrices en actividades que implican organización espacio-temporal, lateralidad, equilibrio y coordinación.';
    			document.form1.apre.options[1].value = "2";
    			document.form1.apre.options[1].text = 'Reconoce las características que lo identifican y diferencian de los demás en actividades y juegos.';
    		}	
    		else if(grado == 1 && competencia == 3)
    		{
    			document.form1.apre.options[0].value = "1";
    			document.form1.apre.options[0].text = 'Propone distintas respuestas motrices y expresivas ante un mismo problema en actividades lúdicas.';
    			document.form1.apre.options[1].value = "2";
    			document.form1.apre.options[1].text = 'Reconoce formas de participación e interacción en juegos y actividades físicas a partir de normas básicas de convivencia.';
    		}	
    	break;
    	case "2":
    		if( grado == 1 && competencia == 1)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Explora la combinación de los patrones básicos de movimiento en diferentes actividades y juegos, para favorecer el control de sí.'; 
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Aplica los patrones básicos de movimiento al relacionar el espacio,el tiempo y los objetos que utiliza para responder a las actividades y juegos en los que participa.'; 
          }
          else if(grado == 1 && competencia == 2)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Emplea distintos segmentos corporales al compartir sus posibilidades expresivas y motrices en actividades y juegos, para mejorar el conocimiento de sí.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Explora el equilibrio, la orientación espacio-temporal y la coordinación motriz en actividades y juegos, para impulsar la expresión y control de sus movimientos.';
          } 
		      else if(grado == 1 && competencia == 3)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Pone a prueba sus respuestas motrices en actividades y juegos, individuales y colectivos, con la intención de canalizar y expresar el gusto por moverse.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Identifica las normas de convivencia en actividades y juegos, con el propósito de asumir actitudes que fortalecen el respeto y la inclusión de los demás.';
          }
          else if(grado == 2 && competencia == 1)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Coordina patrones básicos de movimiento en actividades y juegos que implican elementos perceptivo-motrices, con el propósito de fomentar el control de sí y la orientación en el espacio.';
             document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Ajusta la combinación de distintos patrones básicos de movimiento en actividades y juegos individuales y colectivos, con el objeto de responder a las características de cada una.';
          }
          else if(grado == 2 && competencia == 2)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Explora el control postural y respiratorio en actividades y juegos, con la intención de mejorar el conocimiento y cuidado de sí.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Expresa ideas y emociones al comunicarse verbal, corporal y actitudinalmente en distintas actividades motrices, para asignarles un carácter personal.';
          }
          else if(grado == 2 && competencia == 3)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Elabora alternativas de solución ante retos y problemas que se presentan en actividades y juegos, para cumplir con la meta que se plantea.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Distingue distintas actitudes asertivas que se manifiestan en las actividades y juegos para promover ambientes de colaboración y respeto.';
          }
          else if(grado == 3 && competencia == 1)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Explora sus habilidades motrices al participar en situaciones que implican desplazamientos y manejo de diferentes objetos, para adaptarlas a las condiciones que se presentan.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Distingue las posibilidades y límites de sus habilidades motrices al reconocer los elementos básicos de los juegos, con la intención de ajustar el control de sí.';
          }
          else if(grado == 3 && competencia == 2)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Adapta sus acciones ante tareas y estímulos externos que implican cuantificar el tiempo de sus movimientos en el espacio, con el propósito de valorar lo que es capaz de hacer y canalizar el gusto por la actividad física.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Emplea recursos expresivos en diferentes tareas motrices, con la finalidad de establecer códigos de comunicación, interpretarlos y promover la interacción con sus compañeros.';
          }
          else if(grado == 3 && competencia == 3)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Toma decisiones respecto a cómo ubicarse y actuar en distintos juegos, individuales y colectivos, con el fin de solucionar situaciones que se presentan en cada uno.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Establece acuerdos con sus compañeros al identificar y aceptar las reglas de juego, para favorecer la participación, la interacción motriz y el diálogo.';
          }
          else if(grado == 4 && competencia == 1)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Combina distintas habilidades motrices en retos, individuales y cooperativos, para tomar decisiones y mejorar su actuación.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Reconoce sus habilidades motrices en juegos que practican o practicaban en su comunidad, estado o región, para participar en distintas manifestaciones de la motricidad.';
          }
          else if(grado == 4 && competencia == 2)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Distingue sus posibilidades en retos que implican elementos perceptivo-motrices y habilidades motrices, para favorecer el conocimiento de sí.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Experimenta emociones y sentimientos al representar con su cuerpo situaciones e historias en retos motores y actividades de expresión, con la intención de fortalecer su imagen corporal.';
          }
          else if(grado == 4 && competencia == 3)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Propone acciones estratégicas en retos motores de cooperación y oposición, con el propósito de hacer fluida su actuación y la de sus compañeros.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Reconoce la cooperación, el esfuerzo propio y de sus compañeros en situaciones de juego, con el fin de disfrutar de las actividades y resolver los retos motores que se le presentan.';
          }
          else if(grado == 5 && competencia == 1)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Integra sus habilidades motrices en retos y situaciones de juego e iniciación deportiva, con la intención de reconocer sus límites, posibilidades y potencialidades.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Mejora sus capacidades, habilidades y destrezas motrices al participar en situaciones de juego, expresión corporal e iniciación deportiva, para promover actitudes asertivas.';
          }
          else if(grado == 5 && competencia == 2)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Coordina sus acciones y movimientos con ritmos, secuencias y percusiones corporales en situaciones expresivas, individuales y colectivas, para actuar y desempeñarse con seguridad y confianza.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Distingue sus límites y posibilidades, tanto expresivas como motrices, en situaciones de juego, para reconocer lo que puede hacer de manera individual y lo que puede lograr con sus compañeros.';
          }
          else if(grado == 5 && competencia == 3)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Aplica el pensamiento estratégico en situaciones de juego e iniciación deportiva, para disfrutar de la confrontación lúdica.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Experimenta distintas formas de interacción motriz en situaciones de juego e iniciación deportiva, con el propósito de promover ambientes de aprendizaje colaborativos.';
          }
          else if(grado == 6 && competencia == 1)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Adapta sus capacidades, habilidades y destrezas motrices al organizar y participar en diversas actividades recreativas, para consolidar su disponibilidad corporal.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Evalúa su desempeño a partir de retos y situaciones de juego a superar por él, sus compañeros o en conjunto, con el propósito de sentirse y saberse competente.';
          }
          else if(grado == 6 && competencia == 2)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Incorpora sus posibilidades expresivas y motrices, al diseñar y participar en propuestas colectivas, para reconocer sus potencialidades y superar los problemas que se le presentan.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Fortalece su imagen corporal al afrontar desafíos en el juego, la expresión corporal y la iniciación deportiva, para manifestar un mayor control de su motricidad.';
          }
          else if(grado == 6 && competencia == 3)
          {
            document.form1.apre.options[0].value = "1";
            document.form1.apre.options[0].text = 'Diseña estrategias al modificar los elementos básicos del juego en situaciones de iniciación deportiva, con la intención de adaptarse a los cambios en la lógica interna de cada una.';
            document.form1.apre.options[1].value = "2";
            document.form1.apre.options[1].text = 'Propone distintas formas de interacción motriz al organizar situaciones de juego colectivo y de confrontación lúdica, para promover el cuidado de la salud a partir de la actividad física.';
          }
  	break;
    case "3":
      if( grado == 1 && competencia == 1)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Emplea sus capacidades, habilidades y destrezas al controlar sus movimientos ante situaciones de juego, expresión corporal, iniciación deportiva y deporte educativo, con el propósito de actuar asertivamente.'; 
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Identifica los elementos de la condición física al participar en actividades motrices y recreativas como alternativas para mejorar su salud.'; 
        }
        else if(grado == 1 && competencia == 2)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Acepta sus potencialidades al proponer y afrontar distintas situaciones colectivas, de juego y expresión, con la intención de ampliar sus posibilidades.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Reconoce su potencial al participar en distintas situaciones de juego y expresión corporal, para saberse y sentirse competente.';
        } 
        else if(grado == 1 && competencia == 3)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Elabora estrategias de juego al identificar la lógica interna de las situaciones de iniciación deportiva y deporte educativo en las que participa, para ajustar sus desempeños a partir del potencial, individual y de conjunto.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Pone a prueba la interacción motriz en situaciones de juego, iniciación deportiva y deporte educativo, con el objeto de alcanzar una meta en común y obtener satisfacción al colaborar con sus compañeros.';
        }
        else if( grado == 2 && competencia == 1)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Ajusta sus desempeños motores al analizar los roles de cooperación-oposición que se desarrollan en situaciones de juego, iniciación deportiva y deporte educativo, para afianzar el control de sí.'; 
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Relaciona sus desempeños motores con el incremento de su condición física al participar en actividades recreativas, de iniciación deportiva y deporte educativo, para promover la salud.'; 
        }
        else if(grado == 2 && competencia == 2)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Manifiesta su potencial al planificar y participar en actividades físicas vinculadas con la expresión corporal, la iniciación deportiva y el deporte educativo, con el propósito de conocerse mejor y cuidar su salud.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Afirma su sentido de pertenencia a partir de la práctica de actividades físicas, expresivas y deportivas, con la intención de reconocerse y valorar su participación grupal.';
        } 
        else if(grado == 2 && competencia == 3)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Aplica el pensamiento estratégico al analizar la lógica interna de situaciones de iniciación deportiva y deporte educativo, para resolver los problemas que se presentan.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Toma decisiones a favor de la participación colectiva en situaciones de iniciación deportiva y deporte educativo, para promover ambientes de aprendizaje y actitudes asertivas.';
        }
        else if( grado == 3 && competencia == 1)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Demuestra su potencial motor en situaciones de juego, iniciación deportiva y deporte educativo, caracterizadas por la interacción, para fomentar su disponibilidad corporal y autonomía motriz.'; 
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Pone a prueba su potencial motor al diseñar, organizar y participar en actividades recreativas, de iniciación deportiva y deporte educativo, con la intención de fomentar estilos de vida activos y saludables.'; 
        }
        else if(grado == 3 && competencia == 2)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Valora su identidad corporal mediante la práctica de actividades físicas, para la integración permanente de su corporeidad y la adquisición de estilos de vida saludables.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Reafirma su identidad corporal al diseñar alternativas motrices vinculadas con la actividad física, con el propósito de demostrar su potencial.';
        } 
        else if(grado == 3 && competencia == 3)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Reestructura sus estrategias de juego al participar en situaciones de iniciación deportiva y deporte educativo, propuestas por él o sus compañeros, para favorecer su sentimiento de ser competente.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Promueve relaciones asertivas con sus compañeros en situaciones de juego, iniciación deportiva y deporte educativo, para fortalecer su autoestima y promover el juego limpio y la confrontación lúdica.';
        }
    break;
    case "4":
      if( grado == 1 && competencia == 1)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Emplea sus capacidades, habilidades y destrezas al controlar sus movimientos ante situaciones de juego, expresión corporal, iniciación deportiva y deporte educativo, con el propósito de actuar asertivamente.'; 
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Identifica los elementos de la condición física al participar en actividades motrices y recreativas como alternativas para mejorar su salud.'; 
        }
        else if(grado == 1 && competencia == 2)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Acepta sus potencialidades al proponer y afrontar distintas situaciones colectivas, de juego y expresión, con la intención de ampliar sus posibilidades.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Reconoce su potencial al participar en distintas situaciones de juego y expresión corporal, para saberse y sentirse competente.';
        } 
        else if(grado == 1 && competencia == 3)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Elabora estrategias de juego al identificar la lógica interna de las situaciones de iniciación deportiva y deporte educativo en las que participa, para ajustar sus desempeños a partir del potencial, individual y de conjunto.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Pone a prueba la interacción motriz en situaciones de juego, iniciación deportiva y deporte educativo, con el objeto de alcanzar una meta en común y obtener satisfacción al colaborar con sus compañeros.';
        }
        else if( grado == 2 && competencia == 1)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Ajusta sus desempeños motores al analizar los roles de cooperación-oposición que se desarrollan en situaciones de juego, iniciación deportiva y deporte educativo, para afianzar el control de sí.'; 
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Relaciona sus desempeños motores con el incremento de su condición física al participar en actividades recreativas, de iniciación deportiva y deporte educativo, para promover la salud.'; 
        }
        else if(grado == 2 && competencia == 2)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Manifiesta su potencial al planificar y participar en actividades físicas vinculadas con la expresión corporal, la iniciación deportiva y el deporte educativo, con el propósito de conocerse mejor y cuidar su salud.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Afirma su sentido de pertenencia a partir de la práctica de actividades físicas, expresivas y deportivas, con la intención de reconocerse y valorar su participación grupal.';
        } 
        else if(grado == 2 && competencia == 3)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Aplica el pensamiento estratégico al analizar la lógica interna de situaciones de iniciación deportiva y deporte educativo, para resolver los problemas que se presentan.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Toma decisiones a favor de la participación colectiva en situaciones de iniciación deportiva y deporte educativo, para promover ambientes de aprendizaje y actitudes asertivas.';
        }
        else if( grado == 3 && competencia == 1)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Demuestra su potencial motor en situaciones de juego, iniciación deportiva y deporte educativo, caracterizadas por la interacción, para fomentar su disponibilidad corporal y autonomía motriz.'; 
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Pone a prueba su potencial motor al diseñar, organizar y participar en actividades recreativas, de iniciación deportiva y deporte educativo, con la intención de fomentar estilos de vida activos y saludables.'; 
        }
        else if(grado == 3 && competencia == 2)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Valora su identidad corporal mediante la práctica de actividades físicas, para la integración permanente de su corporeidad y la adquisición de estilos de vida saludables.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Reafirma su identidad corporal al diseñar alternativas motrices vinculadas con la actividad física, con el propósito de demostrar su potencial.';
        } 
        else if(grado == 3 && competencia == 3)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Reestructura sus estrategias de juego al participar en situaciones de iniciación deportiva y deporte educativo, propuestas por él o sus compañeros, para favorecer su sentimiento de ser competente.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Promueve relaciones asertivas con sus compañeros en situaciones de juego, iniciación deportiva y deporte educativo, para fortalecer su autoestima y promover el juego limpio y la confrontación lúdica.';
        }
    break;
    case "5":
      if( grado == 1 && competencia == 1)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Emplea sus capacidades, habilidades y destrezas al controlar sus movimientos ante situaciones de juego, expresión corporal, iniciación deportiva y deporte educativo, con el propósito de actuar asertivamente.'; 
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Identifica los elementos de la condición física al participar en actividades motrices y recreativas como alternativas para mejorar su salud.'; 
        }
        else if(grado == 1 && competencia == 2)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Acepta sus potencialidades al proponer y afrontar distintas situaciones colectivas, de juego y expresión, con la intención de ampliar sus posibilidades.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Reconoce su potencial al participar en distintas situaciones de juego y expresión corporal, para saberse y sentirse competente.';
        } 
        else if(grado == 1 && competencia == 3)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Elabora estrategias de juego al identificar la lógica interna de las situaciones de iniciación deportiva y deporte educativo en las que participa, para ajustar sus desempeños a partir del potencial, individual y de conjunto.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Pone a prueba la interacción motriz en situaciones de juego, iniciación deportiva y deporte educativo, con el objeto de alcanzar una meta en común y obtener satisfacción al colaborar con sus compañeros.';
        }
        else if( grado == 2 && competencia == 1)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Ajusta sus desempeños motores al analizar los roles de cooperación-oposición que se desarrollan en situaciones de juego, iniciación deportiva y deporte educativo, para afianzar el control de sí.'; 
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Relaciona sus desempeños motores con el incremento de su condición física al participar en actividades recreativas, de iniciación deportiva y deporte educativo, para promover la salud.'; 
        }
        else if(grado == 2 && competencia == 2)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Manifiesta su potencial al planificar y participar en actividades físicas vinculadas con la expresión corporal, la iniciación deportiva y el deporte educativo, con el propósito de conocerse mejor y cuidar su salud.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Afirma su sentido de pertenencia a partir de la práctica de actividades físicas, expresivas y deportivas, con la intención de reconocerse y valorar su participación grupal.';
        } 
        else if(grado == 2 && competencia == 3)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Aplica el pensamiento estratégico al analizar la lógica interna de situaciones de iniciación deportiva y deporte educativo, para resolver los problemas que se presentan.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Toma decisiones a favor de la participación colectiva en situaciones de iniciación deportiva y deporte educativo, para promover ambientes de aprendizaje y actitudes asertivas.';
        }
        else if( grado == 3 && competencia == 1)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Demuestra su potencial motor en situaciones de juego, iniciación deportiva y deporte educativo, caracterizadas por la interacción, para fomentar su disponibilidad corporal y autonomía motriz.'; 
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Pone a prueba su potencial motor al diseñar, organizar y participar en actividades recreativas, de iniciación deportiva y deporte educativo, con la intención de fomentar estilos de vida activos y saludables.'; 
        }
        else if(grado == 3 && competencia == 2)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Valora su identidad corporal mediante la práctica de actividades físicas, para la integración permanente de su corporeidad y la adquisición de estilos de vida saludables.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Reafirma su identidad corporal al diseñar alternativas motrices vinculadas con la actividad física, con el propósito de demostrar su potencial.';
        } 
        else if(grado == 3 && competencia == 3)
        {
          document.form1.apre.options[0].value = "1";
          document.form1.apre.options[0].text = 'Reestructura sus estrategias de juego al participar en situaciones de iniciación deportiva y deporte educativo, propuestas por él o sus compañeros, para favorecer su sentimiento de ser competente.';
          document.form1.apre.options[1].value = "2";
          document.form1.apre.options[1].text = 'Promueve relaciones asertivas con sus compañeros en situaciones de juego, iniciación deportiva y deporte educativo, para fortalecer su autoestima y promover el juego limpio y la confrontación lúdica.';
        }
    break;
        }
        var appre = document.getElementById("aprendiz");
        var appree = appre.options[appre.selectedIndex].text;
        var texto4 = document.getElementById("Aprendiza").value = appree;

    console.log("Niveel "+texto);
    console.log("Grado "+ texto2);
    console.log("Competencia "+texto3);
    console.log("Aprendizaje "+texto4);

      }else{
          //si no hay opcion
      document.form1.grado.length = 1;
      document.form1.competencia.length = 1;
      document.form1.apre.length = 1;
      //ponemos un guion por defecto
      apre
      document.form1.grado.options[0].value = "-";
      document.form1.grado.options[0].text = "--Gado--";
      document.form1.competencia.options[0].value = "-";
      document.form1.competencia.options[0].text = "--Competencia motriz--"
      document.form1.apre.options[0].value = "-";
      document.form1.apre.options[0].text = "--Aprendizaje esperado--"
          
        }
  }


/*=============================================
SideBar Menu
=============================================*/

$('.sidebar-menu').tree()

/*=============================================
Data Table
=============================================*/

$(".tablas").DataTable({ // DataTables activa el plugin para todas las tablas de las clase "tablas"

	"language": {

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Ver más",
		"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	}

});



/*=============================================
PARA SELECCIONAR LA FECHA CON mask
=============================================*/

  //Datemask dd/mm/yyyy
  $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
  //Datemask2 mm/dd/yyyy
  $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
  //Money Euro
  $('[data-mask]').inputmask()

/*=============================================
Select2
=============================================*/
  $('.select2').select2()

