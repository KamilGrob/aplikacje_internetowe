<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$amount = $_REQUEST['amount'];
$years  = $_REQUEST['years'];
$rate   = $_REQUEST['rate'] ;

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($amount) && isset($years) && isset($rate))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if (empty($messages)) {
    if (!is_numeric($amount) || $amount <= 0) $messages[] = 'Kwota powinna być liczbą większą od 0';
    if (!is_numeric($years) || $years <= 0) $messages[] = 'Lata powinny być liczbą całkowitą większą od 0';
    if (!is_numeric($rate) || $rate < 0) $messages[] = 'Oprocentowanie powinno być liczbą nieujemną';
}

// 3. wykonaj zadanie jeśli wszystko w porządku
if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int lub float
	$amount = floatval($amount);
    $months = intval($years) * 12;
    $rate = floatval($rate);
	
	//miesięczna stopa procentowa
    $interestRate = ($rate / 100) / 12;

    if ($interestRate == 0) {
        $result = $amount / $months;
    } else {
        $result = $amount * $interestRate / (1 - pow(1 + $interestRate, -$months));
    }

    $result = round($result, 2);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$amount,$months,$rate,$result)
//   będą dostępne w dołączonym skrypcie
include 'credit_view.php';