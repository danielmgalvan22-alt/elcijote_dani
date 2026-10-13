<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina Unificada d'Activitats</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .main-container {
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        /* Estils per al bloc de Mart */
        .container-mart {
            background-color: #1e1e1e;
            border: 1px solid #333;
            border-radius: 4px;
            overflow: hidden;
        }
        .header-mart {
            background-color: #d32f2f;
            color: white;
            padding: 15px 20px;
            font-size: 20px;
            font-weight: bold;
        }
        .content-mart {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .card-mart {
            background-color: #3b3b3b;
            border: 1px solid #4f4f4f;
            padding: 18px 20px;
            border-radius: 4px;
            line-height: 1.5;
            font-size: 16px;
        }
        .card-mart.red-border {
            border-left: 5px solid #d32f2f;
        }
        .tag-mart {
            background-color: #7a1c1c;
            color: #ffffff;
            padding: 2px 6px;
            border-radius: 3px;
        }

        /* Estils per a l'Activitat 1 de text (fons gris clar de la imatge) */
        .container-text {
            background-color: #dcdcdc;
            color: #000000;
            border-radius: 4px;
            overflow: hidden;
            border: 1px solid #bcbcbc;
        }
        .header-text {
            background-color: #000000;
            color: #ffffff;
            padding: 15px 20px;
            font-size: 22px;
            font-weight: bold;
            text-align: center;
        }
        .section-title {
            background-color: #b0b0b0;
            color: #ffffff;
            text-align: center;
            font-family: monospace;
            font-weight: bold;
            font-size: 18px;
            padding: 8px;
            margin: 0;
            border-top: 1px solid #c8c8c8;
            border-bottom: 1px solid #c8c8c8;
        }
        .content-text {
            padding: 25px 30px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .formula-row {
            font-size: 16px;
            font-weight: bold;
        }
        .formula-label {
            color: #0000ff;
            display: inline-block;
            width: 220px;
        }
        .black-box {
            background-color: #000000;
            color: #ffffff;
            padding: 2px 6px;
            font-family: monospace;
        }
        .schema-row {
            font-size: 16px;
            font-weight: bold;
        }
        .schema-label {
            color: #ff0000;
            display: inline-block;
            width: 100px;
            text-decoration: underline;
        }
        .yellow-box {
            background-color: #e5d233;
            color: #000000;
            padding: 2px 6px;
            font-family: monospace;
            border: 1px solid #b8a61f;
        }
    </style>
</head>
<body>

<div class="main-container">

    <!-- SECCIÓ 1: Curositats de Mart -->
    <div class="container-mart">
        <div class="header-mart">
            Curositats de Mart
        </div>
        <div class="content-mart">
            <?php
            $curiositats = [
                [
                    "text" => "És conegut com el <span class=\"tag-mart\">planeta vermell</span>.<br>La seva superfície és vermella per l'òxid de ferro (<span class=\"tag-mart\">òxid metàl·lic</span>), com si estigués rovellat.",
                    "borde_rojo" => true
                ],
                [
                    "text" => "Té tempestes de pols gegants i muntanyes més altes que l'Everest.",
                    "borde_rojo" => false
                ],
                [
                    "text" => "Té el volcà més gran del sistema solar: <span class=\"tag-mart\">Olympus Mons</span>, tres cops més alt que l'Everest!",
                    "borde_rojo" => true
                ],
                [
                    "text" => "Les temperatures poden baixar fins a <span class=\"tag-mart\">-140°C</span> a la nit.",
                    "borde_rojo" => false
                ]
            ];

            foreach ($curiositats as $item) {
                $claseBorde = $item["borde_rojo"] ? "red-border" : "";
                echo "<div class=\"card-mart {$claseBorde}\">";
                echo $item["text"];
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <!-- SECCIÓ 2: Activitat 1 de text -->
    <div class="container-text">
        <div class="header-text">
            Activitat 1 de text
        </div>
        
        <div class="section-title">Fórmules</div>
        <div class="content-text">
            <?php
            $formulas = [
                ["label" => "Composició de l'aigua:", "box" => "H<sub>2</sub>O"],
                ["label" => "Fórmula d'Einstein", "box" => "e=mc<sup>2</sup>"]
            ];

            foreach ($formulas as $f) {
                echo "<div class=\"formula-row\">";
                echo "<span class=\"formula-label\">" . $f["label"] . "</span>";
                echo "<span class=\"black-box\">" . $f["box"] . "</span>";
                echo "</div>";
            }
            ?>
        </div>

        <div class="section-title">Esquema d'una pàgina web</div>
        <div class="content-text">
            <?php
            $esquema = [
                ["label" => "Capçalera", "box" => "&lt;head&gt;&lt;/head&gt;"],
                ["label" => "Cos", "box" => "&lt;body&gt;&lt;/body&gt;"]
            ];

            foreach ($esquema as $e) {
                echo "<div class=\"schema-row\">";
                echo "<span class=\"schema-label\">" . $e["label"] . "</span>";
                echo "<span class=\"yellow-box\">" . $e["box"] . "</span>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

</div>

</body>
</html>