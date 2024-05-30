<?php

class Controller
{
    public function index()
    {
        include './views/content/header.php';
        include './views/content/footer.php';
    }

    public function download()
    {
        if (isset($_POST['url'])) {
            $url = $_POST['url'];
            $video_id = $this->getYouTubeVideoId($url);
            if ($video_id != '') {
                // Simular retraso para mostrar el loader
                sleep(2);
                // Mostrar el video incrustado
                echo '<iframe id="videoFrame" class="vidfra" src="https://www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
                // Proporcionar un enlace para descargar el video
                // width="560" height="315"
                // <a href="download.php?url=' . urlencode($url) . '">Descargar
                echo '

                <div class="cont-descar">
                
                <a class="descar" href="./controller/descarga.php?url=' . urlencode($url) . '">Descargar</a>
               
                
                </div>';
            } else {
                // Si la URL no es válida o no se encuentra el video, mostrar un mensaje de error
                echo '<p>No se pudo encontrar el video de YouTube. Por favor, verifica la URL.</p>';
            }
        } else {
            // Si no se proporciona una URL, redirigir a la página principal
            header("Location: #");
            exit();
        }

    }

    // Función para obtener el ID del video de una URL de YouTube
    private function getYouTubeVideoId($url)
    {
        $video_id = '';
        $url_components = parse_url($url);
        if (isset($url_components['query'])) {
            parse_str($url_components['query'], $params);
            if (isset($params['v'])) {
                $video_id = $params['v'];
            }
        }
        return $video_id;
    }
}
