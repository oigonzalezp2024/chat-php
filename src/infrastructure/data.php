<?php

$data = '[
    {
        "chats":[
            {
                "id_chat" : "234673456354",
                "iniciador" : "24562346",
                "participantes" : [
                    "24562346",
                    "4356246243"
                ],
                "mensajes":[
                    {
                        "usuario": "24562346",
                        "mensaje": "hola que tal...",
                        "video_youtube" : "",
                        "video_cargado" : "",
                        "link_https" : "",
                        "audio": "",
                        "imagen":"",
                        "babull_video":"",
                        "babull_link":""
                    },
                    {
                        "usuario": "4356246243",
                        "mensaje": "my bien, gracias",
                        "video_youtube" : "",
                        "video_cargado" : "",
                        "link_https" : "",
                        "audio": "",
                        "imagen":"",
                        "babull_video":"",
                        "babull_link":""
                    },
                    {
                        "usuario": "4356246243",
                        "mensaje": "como esta tu mama",
                        "video_youtube" : "",
                        "video_cargado" : "",
                        "link_https" : "",
                        "audio": "",
                        "imagen":"",
                        "babull_video":"",
                        "babull_link":""
                    },
                    {
                        "usuario": "24562346",
                        "mensaje": "Muy bien de salud.",
                        "video_youtube" : "",
                        "video_cargado" : "",
                        "link_https" : "",
                        "audio": "",
                        "imagen":"",
                        "babull_video":"",
                        "babull_link":""
                    }
                ]
            }
        ]
    }
]';

$array_php = json_decode($data, true);

// Para verificar el resultado, puedes imprimir el array.
echo '<pre>';
echo $array_php[0]['chats'][0]['id_chat'];
echo '<ul>';
echo '<li>'. $array_php[0]['chats'][0]['mensajes'][0]['mensaje'].'</li>';
echo '<li>'. $array_php[0]['chats'][0]['mensajes'][1]['mensaje'].'</li>';
echo '<li>'. $array_php[0]['chats'][0]['mensajes'][2]['mensaje'].'</li>';
echo '<li>'. $array_php[0]['chats'][0]['mensajes'][3]['mensaje'].'</li>';
echo '</ul>';
echo '</pre>';
