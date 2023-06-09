<?php if (!isset($_SESSION)) {
  session_start();
} 
?>
<!DOCTYPE html>
<html>

<head>
  <title>Country form</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <style>
    html,
    body {
      min-height: 100%;
    }

    body,
    div,
    form,
    input,
    select,
    textarea,
    label,
    p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
    }

    h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
    }

    textarea {
      width: calc(100% - 12px);
      padding: 5px;
    }

    .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
    }

    form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622;
    }

    .banner {
      position: relative;
      height: 300px;
      background-image: url("/uploads/media/default/0001/02/e2502bb5e1dab7d5cc9b011c745033821aad632c.jpeg");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2);
      position: absolute;
      width: 100%;
      height: 100%;
    }

    input,
    select,
    textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    input {
      width: calc(100% - 10px);
      padding: 5px;
    }

    input[type="date"] {
      padding: 4px 5px;
    }

    textarea {
      width: calc(100% - 12px);
      padding: 5px;
    }

    .item:hover p,
    .item:hover i,
    .question:hover p,
    .question label:hover,
    input:hover::placeholder {
      color: #006622;
    }

    .item input:hover,
    .item select:hover,
    .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #006622;
      color: #006622;
    }

    .item {
      position: relative;
      margin: 10px 0;
    }

    .item span {
      color: red;
    }

    input[type="date"]::-webkit-inner-spin-button {
      display: none;
    }

    .item i,
    input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
    }

    .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
    }

    .colums {
      display: flex;
      justify-content: space-between;
      flex-direction: row;
      flex-wrap: wrap;
    }

    .colums div {
      width: 48%;
    }

    [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
    }

    input[type=radio],
    input[type=checkbox] {
      display: none;
    }

    label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
    }

    .question span {
      margin-left: 30px;
    }

    .question-answer label {
      display: block;
    }

    label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
    }

    input[type=radio]:checked+label:before,
    label.radio:hover:before {
      border: 2px solid #006622;
    }

    label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
    }

    input[type=radio]:checked+label:after {
      opacity: 1;
    }

    .flax {
      display: flex;
      justify-content: space-around;
    }

    .btn-block {
      margin-top: 10px;
      text-align: center;
    }

    button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #006622;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
    }

    button:hover {
      background: #00b33c;
    }

    @media (min-width: 568px) {

      .name-item,
      .city-item {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .name-item input,
      .name-item div {
        width: calc(50% - 20px);
      }

      .name-item div input {
        width: 97%;
      }

      .name-item div label {
        display: block;
        padding-bottom: 5px;
      }
    }
  </style>
</head>
<?php
function generateUniqueId() {
  $prefix = 'myapp_'; // préfixe pour éviter les collisions avec d'autres identifiants
  $uniqueId = uniqid($prefix, true); // génère un identifiant unique basé sur le préfixe et l'heure actuelle en microsecondes
  $uniqueId = str_replace('.', '', $uniqueId); // supprime les points pour obtenir uniquement des chiffres
  $uniqueId = substr($uniqueId, -8); // ne garde que les 8 derniers chiffres
  $uniqueId = (int)$uniqueId; // convertit la chaîne de caractères en nombre entier
  
  return $uniqueId;
}
?>
<body>
  <div class="testbox">
    <form action='post_country.php' method='post' role='form' enctype="multipart/form-data">
      <div class="banner">
        <h1>countryform</h1>
      </div>
      <br />
      <fieldset>
        <legend>country's Information</legend>
        <div class="item">
          <label for="fname"> country name<span>*</span></label>
          <input id="countryname" type="text" name="countryname" required/>
        </div>
        <div class="item">
          <input id="country_id" type="text" name="country_id" hidden value="<?= generateUniqueId();?>" />
        </div>
       
        <div class="item">
          <label for="population">population <span>*</span></label>
          <input id="population" name="population" />
        </div>
        <div class="item">
          <label for="climat"> climate<span>*</span></label>
          <input id="climate" type="text" name="climate"required />
        </div>
        <div class="item">
          <label for="activity">currency<span>*</span></label>
          <input id="currency" type="text" name="currency" required/>
        </div>
        <div class="item">
          <label for="history">history<span>*</span></label>
          <input id="history" name="history" required/>
        </div>
        <div class="item">
          <label for="bdate">Price car <span>*</span></label>
          <input id="price_car" name="price_car" required/>
        </div>
        <div class="item">
          <label for="fname"> pricetrip<span>*</span></label>
          <input id="pricetip" name="pricetrip"required />
          <div class="item">
            <label for="fname"> pricetourguide<span>*</span></label>
            <input id="pricetg" name="pricetg"required />
          </div>
          <div>
            <label for="file">Choose link for maps</label>
            <input type="link" id="iframe" name="iframe" multiple>
          </div>
          <div>
            <label for="file">Choose home photo</label>
            <input type="file" id="imgfolder" name="imgfolder" multiple>
          </div>
          <div>
            <label for="file">Choose file to upload for hero</label>
            <input type="file" id="hero_src" name="hero_src" multiple>
          </div>
          <div>
            <label for="cta_src">Choose file to upload cta</label>
            <input type="file" id="cta_src" name="cta_src" multiple>
          </div>
          <div>
            <label for="pic1">Choose file to upload pic1</label>
            <input type="file" id="pic1" name="pic1" multiple>
          </div>
          <div>
            <label for="pic2">Choose file to upload pic2</label>
            <input type="file" id="pic2" name="pic2" multiple>
          </div>
          <div>
            <label for="pic3">Choose file to upload pic3</label>
            <input type="file" id="pic3" name="pic3" multiple>
          </div>
          <div>
            <label for="file">Choose file to upload about</label>
            <input type="file" id="about_src" name="about_src" multiple>
          </div>
          <div>
            <label for="file">Choose file to upload services</label>
            <input type="file" id="services_src" name="services_src" multiple>
          </div>
          <div>
            <label for="file">Choose file to upload contact</label>
            <input type="file" id="contact_src" name="contact_src" multiple>
          </div>
      </fieldset>
      <div class="btn-block">
        <button type="submit" href="/" Submit>add country</button>
      </div>
    </form>
  </div>

</body>

</html>
