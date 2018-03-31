###################
MODELADO DE CLASES - Figuras
###################

Desarrollar la o las clases necesarias que permita la creación de objetos que 
representen figuras geométricas dadas (cuadrado, triangulo, círculo) proveyendo 
un parámetro de entrada único que identifiqué el tipo de objeto esperado como 
retorno. Tip de ayuda: “Factory”

La estructura del modelo de clases que deben tener las implementaciones de 
dichas figuras geométricas será la siguiente:
* Se debe definir una interfaz que exija la definición de métodos que permitan 
la obtención de los datos: superficie; base; altura; diámetro; tipo de figura 
geométrica.
* Puede definirse alguna clase intermedia (no instanciable) para reducir la 
redundancia de código.
* Cada una de sus concreciones debe, ante la invocación de alguno de sus métodos, 
retornar el valor correspondiente o null en caso de que la figura geométrica 
correspondiente no posea dicha característica.

Se debe entregar el código que resuelva el ejercicio. Y en caso de conocer su 
notación se valorara el diseño de su diagrama UML.

Opcionalmente (siendo un plus que sumará puntos a la hora de la evaluación) se 
podrá incluir un archivo Dockerfile (Docker) que permita realizar el build de 
una imagen de container que contenga:
* Intérprete/cliente php.
* Dependencias (en caso de haberlas)
* Código del ejercicio.

El container deberá poder buildearse con el comando: docker build -f Dockerfile 
-t figures. Y luego ejecutarse mediante el comando: docker run --rm --name 
figures php doFigures.php