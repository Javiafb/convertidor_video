<?php require_once './controller/config.php'; ?>

<!DOCTYPE html>
<html lang="es" class="dark translated-ltr" style="color-scheme: dark;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo ESTI ?>/css/estilos.css?v=5" data-precedence="next">
    <link rel="shortcut icon" href="./public/img/logi.png" type="image/x-icon">
    <title>CrocoFlix</title>
</head>

<body class="convertidor-class flex flex-col">

    <header class="w-full">
        <nav class="flex h-14 items-center text-sm font-medium container">
            <div class="flex w-full items-center justify-between">
                <div class="relative flex items-center gap-3">
                    <a class="flex space-x-1.5 focus:outline-none focus-visible:ring-2" href="#">
                        <!-- logo -->
                        <img src="./public/img/logi.png" width="32px" alt="">

                        <div class="font-bold leading-3">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">conver</font>
                            </font>
                            <br>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">tidor </font>
                            </font>
                            <span class="text-muted-foreground bg-muted px-1 text-xs">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">activo</font>
                                </font>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-1">
        <section class="relative overflow-hidden" id="features">
            <div class="mx-auto mb-[64px] grid max-w-[1400px] items-center justify-center px-4 sm:px-24 md:px-4 lg:px-24">
                <form id="youtubeForm">
                    <input name="url" placeholder="Ingrese la URL del video de YouTube" id="converinput" class="items-center rounded-md font-medium transition-color focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:opacity-50 disabled:cursor-not-allowed ring-offset-background border border-input hover:bg-accent hover:text-accent-foreground h-10 py-2 px-4 text-muted-foreground hidden w-64 justify-between gap-3 text-sm lg:inline-flex">
                    <br>
                    <div class="cont-loader">
                        <div id="loader" class="loader"></div>
                    </div>
                </form>
                <div id="videoContainer"></div>
            </div>
        </section>

        <div class="containert-luz -z-10 flex rotate-180 opacity-50 dark:opacity-100">
            <div id="barra" class="scale-[3] md:scale-[2] 2xl:scale-[1.55] luz translate-z-0 translate-y-[-180px] rotate-180 scale-50 transition-color animate-none duration-1000"></div>
        </div>

        <!-- fin de header -->