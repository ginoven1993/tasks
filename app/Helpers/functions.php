<?php 

// Getting user logged informations

use App\Models\Clients;
use App\Models\Contrats;
use App\Models\Contrats_auto;
use App\Models\Partenaires;
use App\Models\Projets;
use App\Models\Taches;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


if (!function_exists('getUserAuth')) {
  function getAuth()
  {
    $id = session('id');
    $admin = User::where(['id' => $id])->first();
    return $admin;  
  }
}
if (!function_exists('getProjet')) {
  function getProjets()
  {
    $id = session('id');
    $projet = Projets::where(['id' => $id])->first();
    return $projet;  
  }
}
if (!function_exists('getTache')) {
  function getTaches()
  {
    $id = session('id');
    $tache = Taches::where(['id' => $id])->first();
    return $tache;  
  }
}


if (!function_exists('getUserAuth')) {
  function getUserAuth()
  {
    $id = session('id');
    $admin = User::where(['role' => 'superadmin'])->first();
    return $admin;  
  }
}

if (!function_exists('getUserAuth')) {
  function getCollabAuth()
  {
    $id = session('id');
    $admin = User::where(['role' => 'collaborateur'])->first();
    return $admin;  
  }
}

if (!function_exists('getRoles')) {
  function getRoles()
  {
    $id = session('id');
    $roles = Role::where(['id' => $id])->first();
    return $roles;
    
  }
}

if (!function_exists('getPermissions')) {
  function getPermissions()
  {
    $id = session('id');
    $permissions = Permission::where(['id' => $id])->first();
    return $permissions;
    
  }
}


// Getting user logged informations
if (!function_exists('getUserById')) {
  function getUserById($idUser)
  {
    $user = User::where(['id' => $idUser])->first();
    return $user;
    
  }
}

if (!function_exists('getChildren')) {
  function getProduit($idClient)
  {
    $users = DB::table('clients')
          ->join('produits','clients.produit_id', '=' ,'produits.id')
          ->select('client.id as id',
                   'produits.categorie as type')
    ->get();
    return $users;
    
  }
}

  // Random string
if (!function_exists('getRamdomText')) {
    function getRamdomText($n) {
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $randomString = '';
  
      for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
      }
      return $randomString;
    }
  }
  // int string
if (!function_exists('getRamdomInt')) {
    function getRamdomInt($n) {
      $characters = '0123456789';
      $randomString = '';
  
      for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
      }
      return $randomString;
    }
}

if (!function_exists('getValueFromTaux')) {
    function getValueFromTaux($taux)
    {
      $newValue = 100-$taux;
  
      return $newValue/100;
    }
  }
  
  
  if (!function_exists('getDefaultDateRemboursement')) {
    function getDefaultDateRemboursement()
    {
      $currentDay = date('Y-m-d');
      $after = getDateAfterPeriod($currentDay,30);
      $elements = explode("-", $after);
  
      $date = $elements[0] . "-" . $elements[1] . "-05";
      return $date;
    }
  }
  
  if (!function_exists('getDateAfterPeriod')) {
    function getDateAfterPeriod($date1, $duree)
    {
      $timestamp1 = strtotime($date1);
      $timestamp2 = $timestamp1 + (60 * 60 * 24 * $duree);
  
      $dateGetting = date('Y-m-d H:i:s', $timestamp2);
  
      return $dateGetting;
    }
  }

// La date actuelle
  if (!function_exists('getActuDate')) {
      function getActuDate()
      {
        $date_actu = formatDate2('d-m-Y');
        return $date_actu;
      }
  }


  // La date en texte
  if (!function_exists('textDate')) {
    function textDate($date)
    {
     $date_text = date('d F Y', strtotime(str_replace('/', '-', $date)));
      return $date_text;
    }
}


  
  if (!function_exists('getDate')) {
    function getDate($date)
    {
      $elements = explode(" ", $date);
      return $elements[0];
    }
  }
  
  
  if (!function_exists('formatDate')) {
    function formatDate($date)
    {
      $formatDates = explode("T", $date);
      $elements = explode(" ", $formatDates[0]);
      $elements2 = explode("-", $elements[0]);
      $date = $elements2[2] . "-" . $elements2[1] . "-" . $elements2[0] . " " .$elements[1];
      return $date;
    }
  }
  
  if (!function_exists('superFormatDate')) {
    function superFormatDate($date)
    {
      $formatDates = explode("T", $date);
      $elements = explode(" ", $formatDates[0]);
      $elements2 = explode("-", $elements[0]);
  
      $timeFormat=explode(":", $elements[1]);
      $date = $elements2[2] . "-" . $elements2[1] . "-" . $elements2[0] . " à " . $timeFormat[0].":".$timeFormat[1];
      return $date;
    }
  }
  
  
  if (!function_exists('getHour')) {
    function getHour($date)
    {
      $formatDates = explode("T", $date);
      $elements = explode(" ", $formatDates[0]);
      $elements2 = explode("-", $elements[0]);
  
      $timeFormat=explode(":", $elements[1]);
  
      $date = $timeFormat[0].":".$timeFormat[1];
      return $date;
    }
  }
  
  if (!function_exists('formatDate2')) {
    function formatDate2($date)
    {
      $elements2 = explode("-", $date);
      $date = $elements2[2] . "-" . $elements2[1] . "-" . $elements2[0];
      return $date;
    }
  }
  
  if (!function_exists('reformatDate')) {
    function reformatDate($date)
    {
      $elements2 = explode("-", $date);
      $date = $elements2[2] . "-" . $elements2[1] . "-" . $elements2[0];
      return $date;
    }
  }

  if (!function_exists('format')) {
    function format($date)
    {
      $elements2 = explode("-", $date);
      $date = $elements2[0] . "-" . $elements2[1] . "-" . $elements2[2];
      return $date;
    }
  }
  
  // Random int
  if (!function_exists('getRamdomInt')) {
    function getRamdomInt($n) {
      $characters = '0123456789';
      $randomString = '';
  
      for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
      }
      return $randomString;
    }
}

if (!function_exists('getMonthName')) {
    function getMonthName($monthOfYear)
    {
      $arrayMonth = array(
       1 => "Janvier",
       2 => "Février",
       3 => "Mars",
       4 => "Avril",
       5 => "Mai",
       6 => "Juin",
       7 => "Juillet",
       8 => "Aôut",
       9 => "Septembre",
       10 => "Octobre",
       11 => "Novembre",
       12 => "Décembre"
     );
      $month =  $arrayMonth[$monthOfYear];
      return $month;
    }
  }
  

?>