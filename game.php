<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Game</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS Customize -->
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <nav class="navbar sticky-top" style="background-color: #C2E6EB;">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand" href="https://ping-pongsakorn.online/bf">Brute-Force <i class="bi bi-lock-fill"></i> </a>
        </div>
    </nav>

    <div class="container d-flex justify-content-center">
        <div class="card text-center mt-4 d-flex justify-content-center shadow p-3 bg-body rounded" style="width:fit-content;">
            <div class="card-body">
                <script>
                    function check() {
                        var slider = document.getElementById("inputRange");
                        var output2 = document.getElementById("inputValue");
                        slider.oninput = function() {
                            output2.value = this.value;
                        }
                        output2.oninput = function() {
                            slider.value = this.value;
                        }
                    }
                </script>

                <label for="inputRange" class="form-label">Slide Me :D</label>
                <input type="range" class="form-range" min="0" max="999" value="0" oninput="check()" id="inputRange">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Value</span>
                    <input id="inputValue" value="0" oninput="check()" type="text" class="form-control" placeholder="Input Number 0 - 999" maxlength="3" aria-label="toSolve" aria-describedby="addon-wrapping">
                </div>

                <script>
                    function loopTable() {

                    }
                </script>

                <div class="d-grid">

                        <button type="button" onclick="showTable();" name="loop" class="btn btn-sm btn-outline-info mt-4">Start Brute-Force <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/dykrlspk.json"
                            trigger="hover"
                            stroke="65"
                            style="width:50px;height:50px">
                        </lord-icon>
                    </button>
                </div>
            </div>
        </div>

    </div>
    <script>
        function showTable() {
            document.getElementById("allTable").style.display = "";
        }
    </script>
    <div class="container mt-5" style="display:none;" id="allTable">
        <table class="table table-bordered table-hover" id="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Random</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <td scope="row" id="#">1</td>
                    <td id="rand">723</td>
                    <td id="status">0</td>
                </tr>
                <tr>
                    <td scope="row" id="#">2</td>
                    <td id="rand">726</td>
                    <td id="status">0</td>
                </tr>
                <tr>
                    <td scope="row" id="#">3</td>
                    <td id="rand">191</td>
                    <td id="status">0</td>
                </tr> -->
                <?php
                function loop() {
                    for($i = 0; $i <= 10; $i++){
                        echo '<tr>';
                        echo '<td scope="row" id="#">'. $i . '</td>';
                        echo '<td id="rand">' . $i*4 .'</td>';

                        echo '<td id="status">0</td>';
                        echo '</tr>';
                        sleep(1);
                    }
                }
                ?>
            </tbody>
        </table>
    </div>






    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa " crossorigin="anonymous "></script>
</body>

</html>