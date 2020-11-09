<?php $title= "contactPage"?>
<?php ob_start(); ?>
<div class="contactPage1">
    <h1>Get in touch</h1>
    <img src="./projectPoodle/public/images/contactPageHeader.jpg">
</div>

<div class="contactPageEmail">
    <p>Email : contactus@contactus.com</p>
</div>

<div class="contactPageNumbers">
    <p>Phone Number: +82 010 1234 5678</p>
    <p>Fax Number +82 010 1234 5678</p>
</div>

<div class="contactPageHeadquarters">
    <h1 style="text-align: center">Headquarters</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.038753844758!2d126.96982341491137!3d37.530583733944795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca4068869c845%3A0xd50d67ce84380ab!2swcoding!5e0!3m2!1sen!2skr!4v1604890590704!5m2!1sen!2skr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<?php
$content = ob_get_clean();
require("template.php");
?>