<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Fatwas</title>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="{{ asset('/css/style-fatwa.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
 

  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

  

  <!-- DataTables Bootstrap 5 Integration -->
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <style>
    .chatbox {
      width: 300px;
      background-color: #fff;
      position : fixed;
      bottom : 0px;
      right : 10px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      z-index: 9;
    }

    #myfaqtable_wrapper{
        width : 100%;
    }

    .chat-header {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px;
      text-align: center;
      font-weight: bold;
    }

    .chat-messages {
      padding: 10px;
      overflow-y: scroll;
      max-height: 200px;
    }

    .message {
      margin-bottom: 10px;
    }

    .user-message {
      background-color: #e2f7cb;
      border-radius: 5px;
      padding: 8px;
      max-width: 80%;
    }

    .bot-message {
      background-color: #d3d3d3;
      border-radius: 5px;
      padding: 8px;
      max-width: 80%;
      align-self: flex-end;
    }

    .chat-input {
      display: flex;
      align-items: center;
      padding: 10px;
      background-color: #f5f5f5;
    }

    .input-box {
      flex-grow: 1;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .send-button {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      margin-left: 10px;
      cursor: pointer;
      
    }
    /* Add this style to your CSS */
.btn-outline-custom {
    color: #d3c331;
    border-color: #d3c331;
}

.btn-outline-custom:hover {
    color: #fff;
    background-color: #d3c331;
    border-color: #d3c331;
}

    
    </style>
</head>
<body>

  <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="chatbox">
                <div class="chat-header">Chatbox</div>
                <div class="chat-messages" id="chat-messages">
                    <div class="message bot-message">Hai, sila tanyakan soalan jika ada.</div>
                </div>
                <div class="chat-input">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" id="soalan" class="form-control mb-2" placeholder="Soalan">
                        </div>
                        <div class="col-12">
                            <input type="text" name="phonenum" id="phonenum" class="form-control mb-2" placeholder="Nombor Telefon">
                        </div>
                    </div>
                    <button onclick="sendMessage()" class="btn btn-primary">Hantar</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- partial:index.partial.html -->
<div class="bg" id="top">
  <!-- LOGO AND NAV BAR -->
  <nav class="navbar  navbar-toggleable-sm navbar-inverse sticky-top">
    <div class="navbar-header">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
  <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
        </button>
      <a class="navbar-brand" id="logo" href="#top"><img src="{{ asset('template') }}/dist/img/fatwalogo.png" alt="Fatwa Logo" class="brand-image img-circle elevation-3" style="opacity: .8"></a>


    </div>
    <!-- /.navbar-header -->

    <div class="collapse  navbar-collapse  justify-content-end" id="navbar-collapse">
      <ul class="navbar-nav text-uppercase">
        <li class="nav-item"><a class="nav-link" href="{{ route('fatwas.view') }}">Fatwa</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('fatwas.viewfaq') }}">Soal Jawab</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('organisasi') }}">Organisasi</a></li>
<li class="nav-item"><a class="nav-link" href="https://mufti.perak.gov.my/">Web Rasmi</a></li>

        <li class="nav-item">
          <a class="nav-link btn btn-warning" href="{{ route('login') }}">Admin</a>
      </li>
      
      </ul>
    </div>
    <!-- /#navbar-collapse -->
  </nav>


  <!-- .COVER -->
  <div class="cover ">


    <!-- HERO SECTION -->

    <div class="landing-page--message">
      <h1>eFatwaInsight: Sistem Pengurusan Fatwa Interaktif Berdasarkan Web untuk Jabatan Mufti Negeri Perak </h1>
      <p class="lead">Kami membantu anda menyediakan fatwa yang betul dan sahih.</p>
      <div id="calendar-container"></div>

      <a href="#hire" class="btn btn-lg btn-outline-custom m-4">Pengenalan</a>

      <a href="#services">
        <h2 class="hidden-sm-down">Soal Jawab</h2>
        <i class="fa fa-chevron-down fa-2x hidden-sm-down mb-5" aria-hidden="true"></i>
      </a>


    </div>
    <!-- /.landing-page--message -->
  </div>
  <!-- /.COVER -->
</div>
<!-- /.BG -->




<!--New Section-->
<section id="new-section">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-md-6">
              <h2 class="mx-2">Fatwa Negeri Perak</h2>
              <p class="lead text-justify">
                  Fatwa Negeri Perak merupakan sumber utama panduan hukum Islam yang merangkumi pelbagai aspek kehidupan. Dikeluarkan oleh ulama-ulama terkemuka di Negeri Perak, fatwa-fatwa ini mencerminkan warisan ilmiah dan kearifan Islam yang menjadi landasan bagi pemahaman dan amalan umat.
              </p>
          </div>
          <div class="col-md-6">
              <img src="https://www.perkim.net.my/wp-content/uploads/2014/05/perak.jpg" alt="Image Description" class="img-fluid">
          </div>
      </div>
  </div>
</section>
<!-- HIRE ME -->
<section id="hire-me">
  <a name="hire"></a>

  <h1 class="mx-2">Tentang eFatwaInsight</h1>

  <p class="lead">eFatwaInsight adalah platform digital yang memudahkan akses kepada Fatwa Negeri Perak secara terperinci dan sistematik. Menjadi jambatan antara masyarakat dengan ilmu agama, eFatwaInsight membolehkan pengguna menjelajahi dan memahami panduan hukum Islam dengan mudah melalui antara muka pengguna yang mesra, menyediakan jawapan kepada pertanyaan dan penyelidikan mereka. Platform ini bertujuan untuk membantu memperkukuhkan pemahaman umat terhadap ajaran Islam dalam konteks kehidupan moden.

  </p>

  <!-- Button trigger modal -->


</section>


<!-- #SERVICES -->
<section class="dev" id="first-page">
  <a name="services"></a>
  <header>


    <h1>Soal Jawab</h1>

  </header>

  <div class="container" style="margin-top : 50px;">
    <div class="row text-center">
        <table id="myfaqtable" class="table table-striped" style="width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Soalan</th>
                    <th>Jawapan</th>
                    <th>Tarikh</th>
                </tr>
            </thead>
            <tbody>
                @foreach($quest as $index=> $item)
                <tr>
                    <td>{{ $index }}</td>
                    <td>{{ $item->inquery }}</td>
                    <td>{{ $item->answer }}</td>
                    <td>{{ $item->created_at }}</td>
                </tr>
                @endforeach
            </tfoot>
        </table>

    </div>
    <!-- /.ROW -->
  </div>
  <!-- /.CONTAINER -->
</section>




<!-- BOOTSTRAP CDN -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- partial -->
  <script src='https://use.fontawesome.com/bda026e536.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script><script  src="{{ asset('/css/script-fatwa.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  new DataTable('#myfaqtable');

  function sendMessage() {
    const soalan = document.getElementById('soalan').value;
    const phonenum = document.getElementById('phonenum').value;
    const chatMessages = document.getElementById('chat-messages');

    // Check if user input is empty
    if (!soalan.trim()) {
        alert('Tiada Mesej untuk Dihantar'); // You can replace this with a more user-friendly notification
        return;
    }

    // Add user message to the chat
    const userMessageDiv = document.createElement('div');
    userMessageDiv.className = 'message user-message';
    userMessageDiv.textContent = soalan;
    chatMessages.appendChild(userMessageDiv);

    //send to backend
    const apiUrl = "{{ route('fatwas.query') }}";
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

    // Define the payload
    const payload = {
        message: soalan,
        phonenum: phonenum,
    };

    // Make a POST request with Axios
    axios.post(apiUrl, payload, {
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            },
        })
        .then(response => {
            // Handle the response
            console.log('Response:', response.data);
        })
        .catch(error => {
            // Handle errors
            console.error('Error:', error);
        });

    // Simulate a bot response (you can replace this with actual logic)
    const botResponseDiv = document.createElement('div');
    botResponseDiv.className = 'message bot-message';
    botResponseDiv.textContent = 'Mesej anda telah diterima, kami akan menjawab pertanyaan anda sebentar lagi.';
    chatMessages.appendChild(botResponseDiv);

    // Clear the user input fields
    document.getElementById('soalan').value = '';
    document.getElementById('phonenum').value = '';

    // Scroll to the bottom of the chatbox
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

</script>






  
  
</body>
</html>
