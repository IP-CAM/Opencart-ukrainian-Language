<?php
// Заголовок
$_['heading_title']				= 'Оплата через eWAY';

// Текст
$_['text_extension']			= 'Розширення';
$_['text_success']				= 'Успіх: Ви змінили ваші налаштування eWAY!';
$_['text_edit']					= 'Редагувати eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Авторизація';
$_['text_sale']					= 'Продаж';
$_['text_transparent']			= 'Прозоре перенаправлення (форма оплати на сайті)';
$_['text_iframe']				= 'IFrame (форма оплати в вікні)';
$_['text_connect_eway']	        = 'eWAY допомагає бізнесам безпечно обробляти всі основні кредитні картки, з вбудованою системою запобігання шахрайству, цілодобовою технічною підтримкою та багатьма іншими перевагами. <a target="_blank" href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf">Клацніть тут</a>';
$_['text_eway_image']	        = '<a target="_blank" href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf"><img src="view/image/payment/eway_connect.png" alt="eWAY" title="eWAY" class="img-fluid" /></a>';

// Введення
$_['entry_paymode']				= 'Режим оплати';
$_['entry_test']				= 'Режим тестування';
$_['entry_order_status']		= 'Статус замовлення';
$_['entry_order_status_refund'] = 'Статус замовлення для повернення коштів';
$_['entry_order_status_auth']	= 'Статус замовлення для авторизації';
$_['entry_order_status_fraud']	= 'Статус замовлення для підозрілих операцій';
$_['entry_status']				= 'Стан';
$_['entry_username']			= 'API-ключ eWAY';
$_['entry_password']			= 'Пароль eWAY';
$_['entry_payment_type']		= 'Тип оплати';
$_['entry_geo_zone']			= 'Геозона';
$_['entry_sort_order']			= 'Порядок сортування';
$_['entry_transaction_method']	= 'Метод транзакції';

// Помилка
$_['error_permission']			= 'Попередження: У вас немає дозволу на зміну модуля оплати eWAY';
$_['error_username']			= 'API-ключ eWAY обов\'язковий!';
$_['error_password']			= 'Пароль eWAY обов\'язковий!';
$_['error_payment_type']		= 'Потрібно вибрати хоча б один тип оплати!';

// Підказки
$_['help_testmode']				= 'Встановіть "Так", щоб використовувати режим тестування eWAY.';
$_['help_username']				= 'Ваш API-ключ eWAY з вашого облікового запису MYeWAY.';
$_['help_password']				= 'Пароль API eWAY з вашого облікового запису MYeWAY.';
$_['help_transaction_method']	= 'Авторизація доступна тільки для австралійських банків';

// Сторінка замовлення - вкладка оплати
$_['text_payment_info']			= 'Інформація про оплату';
$_['text_order_total']			= 'Загальна сума авторизована';
$_['text_transactions']			= 'Транзакції';
$_['text_column_transactionid'] = 'ID транзакції eWAY';
$_['text_column_amount']		= 'Сума';
$_['text_column_type']			= 'Тип';
$_['text_column_created']		= 'Створено';
$_['text_total_captured']		= 'Загальна сума сплачена';
$_['text_capture_status']		= 'Оплата сплачена';
$_['text_void_status']			= 'Оплата скасована';
$_['text_refund_status']		= 'Оплата повернута';
$_['text_total_refunded']		= 'Загальна сума повернута';
$_['text_refund_success']		= 'Повернення пройшло успішно!';
$_['text_capture_success']		= 'Оплата сплачена успішно!';
$_['text_refund_failed']		= 'Повернення не вдалось: ';
$_['text_capture_failed']		= 'Сплата не вдалася: ';
$_['text_unknown_failure']		= 'Недійсне замовлення або сума';
$_['text_refund']               = 'Повернення';

$_['text_confirm_capture']		= 'Ви впевнені, що хочете сплатити оплату?';
$_['text_confirm_release']		= 'Ви впевнені, що хочете скасувати оплату?';
$_['text_confirm_refund']		= 'Ви впевнені, що хочете повернути оплату?';

$_['text_empty_refund']			= 'Будь ласка, введіть суму для повернення';
$_['text_empty_capture']		= 'Будь ласка, введіть суму для оплати';

$_['btn_refund']				= 'Повернути';
$_['btn_capture']				= 'Сплатити';


// Validation Error codes
$_['text_card_message_V6000']	= 'Undefined Validation Error';
$_['text_card_message_V6001'] 	= 'Invalid Customer IP';
$_['text_card_message_V6002'] 	= 'Invalid DeviceID';
$_['text_card_message_V6011'] 	= 'Invalid Amount';
$_['text_card_message_V6012'] 	= 'Invalid Invoice Description';
$_['text_card_message_V6013'] 	= 'Invalid Invoice Number';
$_['text_card_message_V6014'] 	= 'Invalid Invoice Reference';
$_['text_card_message_V6015'] 	= 'Invalid Currency Code';
$_['text_card_message_V6016'] 	= 'Payment Required';
$_['text_card_message_V6017'] 	= 'Payment Currency Code Required';
$_['text_card_message_V6018'] 	= 'Unknown Payment Currency Code';
$_['text_card_message_V6021'] 	= 'Cardholder Name Required';
$_['text_card_message_V6022'] 	= 'Card Number Required';
$_['text_card_message_V6023'] 	= 'CVN Required';
$_['text_card_message_V6031'] 	= 'Invalid Card Number';
$_['text_card_message_V6032'] 	= 'Invalid CVN';
$_['text_card_message_V6033'] 	= 'Invalid Expiry Date';
$_['text_card_message_V6034'] 	= 'Invalid Issue Number';
$_['text_card_message_V6035'] 	= 'Invalid Start Date';
$_['text_card_message_V6036'] 	= 'Invalid Month';
$_['text_card_message_V6037'] 	= 'Invalid Year';
$_['text_card_message_V6040'] 	= 'Invalid Token Customer Id';
$_['text_card_message_V6041'] 	= 'Customer Required';
$_['text_card_message_V6042'] 	= 'Customer First Name Required';
$_['text_card_message_V6043'] 	= 'Customer Last Name Required';
$_['text_card_message_V6044'] 	= 'Customer Country Code Required';
$_['text_card_message_V6045'] 	= 'Customer Title Required';
$_['text_card_message_V6046'] 	= 'Token Customer ID Required';
$_['text_card_message_V6047'] 	= 'RedirectURL Required';
$_['text_card_message_V6051'] 	= 'Invalid First Name';
$_['text_card_message_V6052'] 	= 'Invalid Last Name';
$_['text_card_message_V6053'] 	= 'Invalid Country Code';
$_['text_card_message_V6054'] 	= 'Invalid Email';
$_['text_card_message_V6055'] 	= 'Invalid Phone';
$_['text_card_message_V6056'] 	= 'Invalid Mobile';
$_['text_card_message_V6057'] 	= 'Invalid Fax';
$_['text_card_message_V6058'] 	= 'Invalid Title';
$_['text_card_message_V6059'] 	= 'Redirect URL Invalid';
$_['text_card_message_V6060'] 	= 'Redirect URL Invalid';
$_['text_card_message_V6061'] 	= 'Invalid Reference';
$_['text_card_message_V6062'] 	= 'Invalid Company Name';
$_['text_card_message_V6063'] 	= 'Invalid Job Description';
$_['text_card_message_V6064'] 	= 'Invalid Street1';
$_['text_card_message_V6065'] 	= 'Invalid Street2';
$_['text_card_message_V6066'] 	= 'Invalid City';
$_['text_card_message_V6067'] 	= 'Invalid State';
$_['text_card_message_V6068'] 	= 'Invalid Postalcode';
$_['text_card_message_V6069'] 	= 'Invalid Email';
$_['text_card_message_V6070'] 	= 'Invalid Phone';
$_['text_card_message_V6071'] 	= 'Invalid Mobile';
$_['text_card_message_V6072'] 	= 'Invalid Comments';
$_['text_card_message_V6073'] 	= 'Invalid Fax';
$_['text_card_message_V6074'] 	= 'Invalid Url';
$_['text_card_message_V6075'] 	= 'Invalid Shipping Address First Name';
$_['text_card_message_V6076'] 	= 'Invalid Shipping Address Last Name';
$_['text_card_message_V6077'] 	= 'Invalid Shipping Address Street1';
$_['text_card_message_V6078'] 	= 'Invalid Shipping Address Street2';
$_['text_card_message_V6079'] 	= 'Invalid Shipping Address City';
$_['text_card_message_V6080'] 	= 'Invalid Shipping Address State';
$_['text_card_message_V6081'] 	= 'Invalid Shipping Address PostalCode';
$_['text_card_message_V6082'] 	= 'Invalid Shipping Address Email';
$_['text_card_message_V6083'] 	= 'Invalid Shipping Address Phone';
$_['text_card_message_V6084'] 	= 'Invalid Shipping Address Country';
$_['text_card_message_V6091'] 	= 'Unknown Country Code';
$_['text_card_message_V6100'] 	= 'Invalid Card Name';
$_['text_card_message_V6101'] 	= 'Invalid Card Expiry Month';
$_['text_card_message_V6102'] 	= 'Invalid Card Expiry Year';
$_['text_card_message_V6103'] 	= 'Invalid Card Start Month';
$_['text_card_message_V6104'] 	= 'Invalid Card Start Year';
$_['text_card_message_V6105'] 	= 'Invalid Card Issue Number';
$_['text_card_message_V6106'] 	= 'Invalid Card CVN';
$_['text_card_message_V6107'] 	= 'Invalid AccessCode';
$_['text_card_message_V6108'] 	= 'Invalid CustomerHostAddress';
$_['text_card_message_V6109'] 	= 'Invalid UserAgent';
$_['text_card_message_V6110'] 	= 'Invalid Card Number';
$_['text_card_message_V6111'] 	= 'Unauthorised API Access, Account Not PCI Certified';
$_['text_card_message_V6112'] 	= 'Redundant card details other than expiry year and month';
$_['text_card_message_V6113'] 	= 'Invalid transaction for refund';
$_['text_card_message_V6114'] 	= 'Gateway validation error';
$_['text_card_message_V6115'] 	= 'Invalid DirectRefundRequest, Transaction ID';
$_['text_card_message_V6116'] 	= 'Invalid card data on original TransactionID';
$_['text_card_message_V6124'] 	= 'Invalid Line Items. The line items have been provided however the totals do not match the TotalAmount field';
$_['text_card_message_V6125'] 	= 'Selected Payment Type not enabled';
$_['text_card_message_V6126'] 	= 'Invalid encrypted card number, decryption failed';
$_['text_card_message_V6127'] 	= 'Invalid encrypted cvn, decryption failed';
$_['text_card_message_V6128'] 	= 'Invalid Method for Payment Type';
$_['text_card_message_V6129'] 	= 'Transaction has not been authorised for Capture/Cancellation';
$_['text_card_message_V6130'] 	= 'Generic customer information error';
$_['text_card_message_V6131'] 	= 'Generic shipping information error';
$_['text_card_message_V6132'] 	= 'Transaction has already been completed or voided, operation not permitted';
$_['text_card_message_V6133'] 	= 'Checkout not available for Payment Type';
$_['text_card_message_V6134'] 	= 'Invalid Auth Transaction ID for Capture/Void';
$_['text_card_message_V6135'] 	= 'PayPal Error Processing Refund';
$_['text_card_message_V6140'] 	= 'Merchant account is suspended';
$_['text_card_message_V6141'] 	= 'Invalid PayPal account details or API signature';
$_['text_card_message_V6142'] 	= 'Authorise not available for Bank/Branch';
$_['text_card_message_V6150'] 	= 'Invalid Refund Amount';
$_['text_card_message_V6151'] 	= 'Refund amount greater than original transaction';
$_['text_card_message_D4406'] 	= 'Unknown error';
$_['text_card_message_S5010'] 	= 'Unknown error';