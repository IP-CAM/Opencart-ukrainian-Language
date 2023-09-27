<?php
// Заголовок
$_['heading_title']				 = 'First Data EMEA Web Service API';

// Текст
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Розширення';
$_['text_success']					 = 'Успіх: Ви внесли зміни в налаштування облікового запису First Data!';
$_['text_edit']                      = 'Редагувати First Data EMEA Web Service API';
$_['text_card_type']				 = 'Тип картки';
$_['text_enabled']					 = 'Увімкнено';
$_['text_merchant_id']				 = 'Ідентифікатор магазину';
$_['text_subaccount']				 = 'Субакаунт';
$_['text_user_id']					 = 'Ідентифікатор користувача';
$_['text_capture_ok']				 = 'Захоплення було успішним';
$_['text_capture_ok_order']			 = 'Захоплення було успішним, статус замовлення оновлено на успішно - виконано';
$_['text_refund_ok']				 = 'Повернення було успішним';
$_['text_refund_ok_order']			 = 'Повернення було успішним, статус замовлення оновлено на повернено';
$_['text_void_ok']					 = 'Скасування було успішним, статус замовлення оновлено на скасовано';
$_['text_settle_auto']				 = 'Продаж';
$_['text_settle_delayed']			 = 'Попередній авторизації';
$_['text_mastercard']				 = 'Mastercard';
$_['text_visa']						 = 'Visa';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Інформація про оплату';
$_['text_capture_status']			 = 'Оплата захоплено';
$_['text_void_status']				 = 'Платіж скасовано';
$_['text_refund_status']			 = 'Платіж повернуто';
$_['text_order_ref']				 = 'Посилання на замовлення';
$_['text_order_total']				 = 'Всього авторизовано';
$_['text_total_captured']			 = 'Всього захоплено';
$_['text_transactions']				 = 'Транзакції';
$_['text_column_amount']			 = 'Сума';
$_['text_column_type']				 = 'Тип';
$_['text_column_date_added']		 = 'Створено';
$_['text_confirm_void']				 = 'Ви впевнені, що хочете скасувати платіж?';
$_['text_confirm_capture']			 = 'Ви впевнені, що хочете захопити платіж?';
$_['text_confirm_refund']			 = 'Ви впевнені, що хочете повернути платіж?';
$_['text_void']                      = 'Скасування';
$_['text_payment']                   = 'Оплата';
$_['text_refund']                    = 'Повернення';

// Введення
$_['entry_certificate_path']		 = 'Шлях до сертифіката';
$_['entry_certificate_key_path']	 = 'Шлях до приватного ключа';
$_['entry_certificate_key_pw']		 = 'Пароль приватного ключа';
$_['entry_certificate_ca_path']		 = 'Шлях до сертифіката CA';
$_['entry_merchant_id']				 = 'Ідентифікатор магазину';
$_['entry_user_id']					 = 'Ідентифікатор користувача';
$_['entry_password']				 = 'Пароль';
$_['entry_total']					 = 'Загальна сума';
$_['entry_sort_order']				 = 'Порядок сортування';
$_['entry_geo_zone']				 = 'Геозона';
$_['entry_status']					 = 'Статус';
$_['entry_debug']					 = 'Ведення журналу налагодження';
$_['entry_auto_settle']				 = 'Тип розрахунку';
$_['entry_status_success_settled']	 = 'Успіх - виконано';
$_['entry_status_success_unsettled'] = 'Успіх - не виконано';
$_['entry_status_decline']			 = 'Відхилено';
$_['entry_status_void']				 = 'Скасовано';
$_['entry_status_refund']			 = 'Повернуто';
$_['entry_enable_card_store']		 = 'Увімкнути збереження ідентифікаторів карток';
$_['entry_cards_accepted']			 = 'Приймаються типи карток';

// Допомога
$_['help_total']					 = 'Загальна сума замовлення, при якій цей спосіб оплати стає активним';
$_['help_certificate']				 = 'Сертифікати та приватні ключі повинні зберігатися поза публічними теками веб-сервера';
$_['help_card_select']				 = 'Попросити користувача вибрати тип своєї картки перед перенаправленням';
$_['help_notification']				 = 'Вам потрібно надати цей URL-адрес First Data для отримання сповіщень про оплату';
$_['help_debug']					 = 'Увімкнення режиму налагодження записуватиме чутливі дані у файл журналу. Ви повинні завжди вимикати його, якщо не отримали інших вказівок.';
$_['help_settle']					 = 'Якщо ви використовуєте попередню авторизацію, ви повинні завершити дію після авторизації протягом 3-5 днів, інакше вашу транзакцію видалять';

// Вкладка
$_['tab_account']					 = 'Інформація про API';
$_['tab_order_status']				 = 'Статуси замовлення';
$_['tab_payment']					 = 'Налаштування оплати';

// Кнопка
$_['button_capture']				 = 'Захопити';
$_['button_refund']					 = 'Повернути';
$_['button_void']					 = 'Скасувати';

// Помилка
$_['error_merchant_id']				 = 'Ідентифікатор магазину є обов’язковим';
$_['error_user_id']					 = 'Ідентифікатор користувача є обов’язковим';
$_['error_password']				 = 'Пароль є обов’язковим';
$_['error_certificate']				 = 'Шлях до сертифіката є обов’язковим';
$_['error_key']						 = 'Приватний ключ сертифіката є обов’язковим';
$_['error_key_pw']					 = 'Пароль приватного ключа є обов’язковим';
$_['error_ca']						 = 'Сертифікат авторитета (CA) є обов’язковим';
