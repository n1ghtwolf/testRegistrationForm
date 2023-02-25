<?php
require_once "classes/UserRepository.php";
require_once "classes/Validator.php";
require_once "classes/Logger.php";
require_once "classes/JsonResponse.php";

$validator = new Validator();
$userRepository = new UserRepository();
$logger = new Logger();

$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordConfirmation = $_POST["password_confirmation"];

if (!$validator->validateEmail($email)) {
    return new JsonResponse(false, "Некорpектный email");
}

if (!$validator->validatePassword($password, $passwordConfirmation)) {
    return new JsonResponse(false, "Пароли не совпадают");
}

$logger->log(
    sprintf(
        "Пользователь %s%s найден",
        $email,
        $userRepository->findByEmail($email) ? "" : " не"
    )
);
$response = new JsonResponse(true);
