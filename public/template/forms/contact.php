<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_alamat = $_POST['email'];
  $contact->pekerjaan = $_POST['pekerjaan'];
  $contact->keperluan = $_POST['keperluan'];
  $contact->bertemu_dengan = $_POST['bertemu_dengan'];
  $contact->bertemu_dengan = $_POST['bertemu_dengan'];
  $contact->no_ktp = $_POST['no_ktp'];
  $contact->no_kendaraan = $_POST['no_kendaraan'];
  $contact->jam_masuk = $_POST['jam_masuk'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'Name');
  $contact->add_message( $_POST['alamat'], 'Alamat');
  $contact->add_message( $_POST['pekerjaan'], 'Pekerjaan');
  $contact->add_message( $_POST['keperluan'], 'Keperluan');
  $contact->add_message( $_POST['bertemu_dengan'], 'Bertemu Dengan');
  $contact->add_message( $_POST['no_ktp'], 'No KTP');
  $contact->add_message( $_POST['foto_ktp'], 'Foto KTP');
  $contact->add_message( $_POST['no_kendaraan'], 'No Kendaraan');
  $contact->add_message( $_POST['jam_masuk'], 'Jam Masuk');

  echo $contact->send();
?>
