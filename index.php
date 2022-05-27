<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./source/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <script src="./source/javascript/navBarActiveControl.js"></script>
</head>

<body>
    <div class="hero-section">
        <?php
        require './header.php';
        ?>
        <script>
            var pageName = 'Trang chủ';
            setNavActive(pageName);
        </script>
        <div class="banner">
            <div class="svg"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 470 470" style="enable-background:new 0 0 470 470;" xml:space="preserve">
                    <g>
                        <path style="fill:#98D9D5;" d="M82.132,273.404v-19.607c-10.67-3.226-18.463-13.146-18.463-24.854v-75.497
            		c-11.8,24.726-18.417,52.381-18.417,81.555c0,24.649,4.721,48.216,13.302,69.847C61.848,291.461,70.515,280.175,82.132,273.404z" />
                        <path style="fill:#98D9D5;" d="M387.902,301.885v46.112c10.405-14.019,18.921-29.517,25.183-46.112H387.902z" />
                        <path style="fill:#98D9D5;" d="M300.089,413.602c-12.93-10.907-20.545-26.814-20.545-44.149v-46.765h-19.084
            		c-17.354,0-31.474-14.119-31.474-31.474s14.119-31.474,31.474-31.474h127.015V245.8c-13.469-2.229-25.355-10.376-32.28-22.246
            		c-12.2,0-45.489,0-58.485,0c-5.602,12.59-18.169,20.968-32.333,20.968c-19.515,0-35.391-15.876-35.391-35.391v-21.399
            		c0-4.142,3.358-7.5,7.5-7.5h48.283v-13.941c0-13.311,10.28-25.478,23.403-27.701c0.414-0.07,0.833-0.105,1.252-0.105h23.926
            		v-13.086h-12.5c-4.142,0-7.5-3.358-7.5-7.5s3.358-7.5,7.5-7.5h32.411l-0.288-24.43c-16.721-13.236-35.71-23.722-56.283-30.771
            		c-7.768,26.884-32.787,46.23-61.438,46.23s-53.67-19.346-61.438-46.23c-16.386,5.615-31.764,13.413-45.795,23.041h26.982
            		c16.793,0,30.455,13.662,30.455,30.455c0,10.856-5.852,20.828-14.995,26.237v89.54c0,4.142-3.358,7.5-7.5,7.5s-7.5-3.358-7.5-7.5
            		v-2.357c-18.326,0.325-31.647,0.401-39.866,0.227v6.602c0,11.709-7.793,21.629-18.463,24.854v13.838
            		c3.304-0.686,6.725-1.049,10.229-1.049c27.045,0,49.17,21.472,50.227,48.263h11.909c20.129,0,36.506,16.376,36.506,36.505
            		c0,15.072-9.384,28.486-23.027,33.928v32.402c16.615,4.761,34.153,7.316,52.277,7.316C258.011,425,279.847,420.973,300.089,413.602
            		z M260.359,149.219c0-4.142,3.358-7.5,7.5-7.5s7.5,3.358,7.5,7.5v7.813c0,4.142-3.358,7.5-7.5,7.5s-7.5-3.358-7.5-7.5V149.219z" />
                        <path style="fill:#6DA8D6;" d="M372.902,365.835v-71.45c0-4.142,3.358-7.5,7.5-7.5h37.649c4.689-16.498,7.201-33.904,7.201-51.885
            		c0-53.089-21.896-101.153-57.121-135.662l0.218,18.473c0.023,2.004-0.756,3.935-2.165,5.36s-3.33,2.228-5.334,2.228h-12.5v20.586
            		c0,4.142-3.358,7.5-7.5,7.5h-30.709c-5.585,1.251-10.373,7.094-10.373,12.806v21.441c0,4.142-3.358,7.5-7.5,7.5h-48.283v13.899
            		c0,11.244,9.147,20.391,20.391,20.391c9.329,0,17.454-6.301,19.759-15.324l0.056,0.014c0.596-2.221,2.417-5.658,7.978-5.658
            		l67.596-0.001c2.96,0,5.643,1.741,6.849,4.444c4.992,11.188,16.124,18.418,28.36,18.418c4.142,0,7.5,3.358,7.5,7.5v28.324
            		c0,4.142-3.358,7.5-7.5,7.5H260.459c-9.083,0-16.474,7.39-16.474,16.474s7.39,16.474,16.474,16.474h26.584
            		c4.142,0,7.5,3.358,7.5,7.5v54.265c0,15.527,8.294,29.529,21.857,37.321C337.7,396.671,356.837,382.729,372.902,365.835z" />
                        <path style="fill:#FFFFFF;" d="M188.187,50.903c5.892,20.649,25.08,35.525,47.065,35.525s41.173-14.877,47.065-35.525
            		C267.261,47.052,251.492,45,235.252,45S203.243,47.052,188.187,50.903z" />
                        <path style="fill:#6DA8D6;" d="M167.975,412.684V379.74c0-3.549,2.488-6.613,5.961-7.34c9.889-2.072,17.066-10.923,17.066-21.045
            		c0-11.858-9.647-21.505-21.506-21.505h-19.37c-4.142,0-7.5-3.358-7.5-7.5v-5.497c0-19.446-15.82-35.266-35.266-35.266
            		c-19.446,0-35.267,15.82-35.267,35.266v15.405C93.947,368.78,127.707,397.386,167.975,412.684z" />
                        <path style="fill:#6DA8D6;" d="M89.632,239.906c6.045,0,10.963-4.918,10.963-10.963v-14.471c0-2.319,1.072-4.507,2.905-5.928
            		c1.748-1.354,4-1.866,6.151-1.409c3.417,0.434,24.702,0.332,45.81-0.026v-76.879c0-3.139,1.955-5.946,4.899-7.035
            		c6.039-2.233,10.096-8.06,10.096-14.5c0-8.521-6.933-15.455-15.455-15.455h-46.107c-11.388,10.161-21.546,21.668-30.225,34.272
            		v101.43C78.669,234.988,83.587,239.906,89.632,239.906z" />
                        <path style="fill:#FFCC75;" d="M454.763,220.488C447.26,105.261,350.84,15,235.252,15c-121.309,0-220,98.692-220,220
            		c0,44.491,13.222,87.356,38.236,123.961c1.323,1.936,1.664,4.379,0.923,6.603l-25.139,75.415l75.416-25.138
            		c2.224-0.741,4.667-0.4,6.603,0.923C147.895,441.778,190.76,455,235.252,455c115.587,0,212.008-90.261,219.511-205.487
            		c0.267-4.093,3.774-7.199,7.853-6.999c0.081-2.496,0.137-4.999,0.137-7.514c0-2.516-0.056-5.018-0.137-7.514
            		C458.538,227.698,455.03,224.582,454.763,220.488z M386.658,373.062c-0.454,0.685-1.019,1.287-1.667,1.79
            		c-18.224,19.5-40.194,35.452-64.761,46.688c-0.561,0.35-1.167,0.617-1.797,0.808C292.998,433.685,264.85,440,235.252,440
            		c-21.409,0-42.059-3.305-61.474-9.421c-0.441-0.102-0.868-0.239-1.276-0.415c-48.06-15.489-88.423-48.267-113.733-90.979
            		c-0.46-0.567-0.837-1.202-1.117-1.888C40.232,307.173,30.252,272.23,30.252,235c0-41.782,12.576-80.677,34.125-113.121
            		c0.323-0.691,0.747-1.323,1.254-1.879c9.81-14.423,21.412-27.53,34.479-39.01c0.528-0.644,1.164-1.192,1.876-1.631
            		c21.478-18.417,46.796-32.468,74.572-40.783c0.438-0.178,0.898-0.316,1.378-0.411C196.133,32.858,215.364,30,235.252,30
            		s39.119,2.858,57.316,8.166c0.48,0.094,0.94,0.232,1.378,0.411c25.933,7.763,49.722,20.529,70.246,37.179
            		c0.697,0.404,1.322,0.914,1.852,1.511c45.307,37.633,74.208,94.37,74.208,157.733c0,21.233-3.246,41.722-9.266,60.998
            		c-0.106,0.485-0.259,0.952-0.454,1.396C421.436,325.798,406.311,351.528,386.658,373.062z" />
                        <path style="fill:#082947;" d="M440.252,235c0-63.364-28.901-120.1-74.208-157.733c-0.53-0.598-1.156-1.107-1.852-1.511
            		c-20.523-16.65-44.312-29.416-70.246-37.179c-0.438-0.178-0.898-0.316-1.378-0.411C274.371,32.858,255.14,30,235.252,30
            		s-39.119,2.858-57.316,8.166c-0.48,0.094-0.94,0.232-1.378,0.411c-27.776,8.315-53.094,22.366-74.572,40.783
            		c-0.712,0.439-1.348,0.987-1.876,1.631C87.044,92.469,75.441,105.577,65.632,120c-0.508,0.557-0.932,1.188-1.254,1.879
            		C42.828,154.323,30.252,193.218,30.252,235c0,37.23,9.98,72.173,27.399,102.298c0.28,0.686,0.657,1.321,1.117,1.888
            		c25.311,42.711,65.673,75.49,113.733,90.979c0.407,0.176,0.835,0.313,1.276,0.415c19.415,6.116,40.065,9.421,61.474,9.421
            		c29.598,0,57.745-6.315,83.181-17.652c0.63-0.191,1.236-0.458,1.797-0.808c24.566-11.235,46.537-27.188,64.761-46.688
            		c0.648-0.502,1.213-1.105,1.667-1.79c19.654-21.534,34.778-47.264,43.874-75.667c0.195-0.445,0.348-0.912,0.454-1.396
            		C437.006,276.722,440.252,256.233,440.252,235z M235.252,86.429c-21.985,0-41.173-14.877-47.065-35.525
            		C203.243,47.052,219.012,45,235.252,45s32.009,2.052,47.065,5.903C276.425,71.552,257.237,86.429,235.252,86.429z M72.094,316.853
            		c0-19.446,15.82-35.266,35.267-35.266c19.446,0,35.266,15.82,35.266,35.266v5.497c0,4.142,3.358,7.5,7.5,7.5h19.37
            		c11.858,0,21.506,9.647,21.506,21.505c0,10.122-7.177,18.973-17.066,21.045c-3.474,0.728-5.961,3.791-5.961,7.34v32.944
            		c-40.268-15.298-74.028-43.905-95.881-80.427V316.853z M108.894,93.24h46.107c8.521,0,15.455,6.933,15.455,15.455
            		c0,6.44-4.057,12.267-10.096,14.5c-2.944,1.089-4.899,3.896-4.899,7.035v76.879c-21.108,0.358-42.394,0.46-45.81,0.026
            		c-2.151-0.457-4.403,0.055-6.151,1.409c-1.833,1.421-2.905,3.609-2.905,5.928v14.471c0,6.045-4.918,10.963-10.963,10.963
            		c-6.045,0-10.963-4.918-10.963-10.963v-101.43C87.348,114.908,97.506,103.401,108.894,93.24z M63.669,153.445v75.497
            		c0,11.709,7.793,21.628,18.463,24.854v19.607c-11.616,6.771-20.284,18.057-23.578,31.443C49.973,283.216,45.252,259.649,45.252,235
            		C45.252,205.826,51.869,178.171,63.669,153.445z M182.975,385.282c13.644-5.442,23.027-18.855,23.027-33.928
            		c0-20.129-16.376-36.505-36.506-36.505h-11.909c-1.056-26.791-23.181-48.263-50.227-48.263c-3.504,0-6.925,0.363-10.229,1.049
            		v-13.838c10.67-3.226,18.463-13.145,18.463-24.854v-6.602c8.219,0.174,21.541,0.098,39.866-0.227v2.357c0,4.142,3.358,7.5,7.5,7.5
            		s7.5-3.358,7.5-7.5v-89.54c9.143-5.41,14.995-15.381,14.995-26.237c0-16.793-13.662-30.455-30.455-30.455h-26.982
            		c14.031-9.628,29.409-17.427,45.795-23.041c7.768,26.884,32.787,46.23,61.438,46.23s53.67-19.346,61.438-46.23
            		c20.573,7.049,39.562,17.535,56.283,30.771l0.288,24.43H320.85c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h12.5v13.086h-23.926
            		c-0.419,0-0.838,0.035-1.252,0.105c-13.124,2.223-23.403,14.39-23.403,27.701v13.941h-48.283c-4.142,0-7.5,3.358-7.5,7.5v21.399
            		c0,19.515,15.876,35.391,35.391,35.391c14.164,0,26.731-8.378,32.333-20.968c12.996,0,46.285,0,58.485,0
            		c6.925,11.87,18.811,20.017,32.28,22.246v13.94H260.459c-17.354,0-31.474,14.119-31.474,31.474s14.119,31.474,31.474,31.474h19.084
            		v46.765c0,17.335,7.615,33.242,20.545,44.149C279.847,420.973,258.011,425,235.252,425c-18.124,0-35.662-2.554-52.277-7.316
            		V385.282z M316.401,406.773c-13.563-7.792-21.857-21.794-21.857-37.321v-54.265c0-4.142-3.358-7.5-7.5-7.5h-26.584
            		c-9.083,0-16.474-7.39-16.474-16.474s7.39-16.474,16.474-16.474h134.515c4.142,0,7.5-3.358,7.5-7.5v-28.324
            		c0-4.142-3.358-7.5-7.5-7.5c-12.236,0-23.369-7.229-28.36-18.418c-1.206-2.703-3.889-4.444-6.849-4.444l-67.596,0.001
            		c-5.561,0-7.382,3.438-7.978,5.658l-0.056-0.014c-2.305,9.022-10.43,15.324-19.759,15.324c-11.244,0-20.391-9.147-20.391-20.391
            		v-13.899h48.283c4.142,0,7.5-3.358,7.5-7.5v-21.441c0-5.712,4.788-11.555,10.373-12.806h30.709c4.142,0,7.5-3.358,7.5-7.5v-20.586
            		h12.5c2.004,0,3.925-0.802,5.334-2.228s2.188-3.356,2.165-5.36l-0.218-18.473c35.224,34.509,57.121,82.573,57.121,135.662
            		c0,17.981-2.512,35.387-7.201,51.885h-37.649c-4.142,0-7.5,3.358-7.5,7.5v71.45C356.837,382.729,337.7,396.671,316.401,406.773z
            		 M387.902,301.885h25.183c-6.262,16.595-14.779,32.093-25.183,46.112V301.885z" />
                        <path style="fill:#082947;" d="M267.859,164.532c4.142,0,7.5-3.358,7.5-7.5v-7.813c0-4.142-3.358-7.5-7.5-7.5s-7.5,3.358-7.5,7.5
            		v7.813C260.359,161.174,263.717,164.532,267.859,164.532z" />
                        <path style="fill:#082947;" d="M462.735,242.516c-0.04-0.003-0.079,0-0.119-0.002c-4.079-0.2-7.586,2.906-7.853,6.999
            		C447.26,364.739,350.84,455,235.252,455c-44.492,0-87.357-13.222-123.961-38.235c-1.936-1.323-4.379-1.664-6.603-0.923
            		l-75.416,25.138l25.139-75.415c0.741-2.224,0.4-4.667-0.923-6.603C28.474,322.356,15.252,279.491,15.252,235
            		c0-121.309,98.691-220,220-220c115.587,0,212.008,90.261,219.511,205.488c0.267,4.094,3.775,7.21,7.853,6.999
            		c0.04-0.002,0.079,0.001,0.119-0.002c4.133-0.269,7.266-3.838,6.997-7.971c-3.872-59.464-29.98-114.767-73.514-155.72
            		C352.487,22.656,295.322,0,235.252,0c-62.771,0-121.784,24.444-166.17,68.83S0.252,172.229,0.252,235
            		c0,46.271,13.391,90.898,38.763,129.316l-28.717,86.149c-0.898,2.695-0.197,5.666,1.812,7.675c2.008,2.009,4.98,2.71,7.675,1.812
            		l86.15-28.716C144.352,456.609,188.98,470,235.252,470c60.069,0,117.234-22.656,160.965-63.793
            		c43.534-40.953,69.642-96.254,73.514-155.719C470.001,246.354,466.868,242.786,462.735,242.516z" />
                    </g>
                </svg></div>
            <div class="hero-text">
                <h1>Website thi tiếng Anh miễn phí, hiệu quả!</h1>
                <p>Nơi thử sức kiến thức Tiếng Anh của bạn</p>
                <a href="examSelecting.php" class="btn btn-filled txt-upper">Bắt đầu</a>
            </div>
        </div>
    </div>
    <?php
    require './source/html/footer.html';
    ?>
</body>

</html>