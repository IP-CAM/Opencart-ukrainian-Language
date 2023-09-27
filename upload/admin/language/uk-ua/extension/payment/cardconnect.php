<?php
// Заголовок
$_['heading_title']                = 'CardConnect';

// Вкладка
$_['tab_settings']                 = 'Налаштування';
$_['tab_order_status']             = 'Статуси замовлення';

// Текст
$_['text_extension']               = 'Розширення';
$_['text_success']                 = 'Успішно: ви змінили модуль оплати CardConnect!';
$_['text_edit']                    = 'Редагувати CardConnect';
$_['text_cardconnect']             = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                 = 'Оплата';
$_['text_refund']                  = 'Повернення';
$_['text_authorize']               = 'Авторизувати';
$_['text_live']                    = 'Реальний';
$_['text_test']                    = 'Тест';
$_['text_no_cron_time']            = 'Cron ще не був виконаний';
$_['text_payment_info']            = 'Інформація про оплату';
$_['text_payment_method']          = 'Метод оплати';
$_['text_card']                    = 'Картка';
$_['text_echeck']                  = 'eCheck';
$_['text_reference']               = 'Посилання';
$_['text_update']                  = 'Оновити';
$_['text_order_total']             = 'Загальна сума замовлення';
$_['text_total_captured']          = 'Всього сплачено';
$_['text_capture_payment']         = 'Захопити оплату';
$_['text_refund_payment']          = 'Повернути оплату';
$_['text_void']                    = 'Скасувати';
$_['text_transactions']            = 'Транзакції';
$_['text_column_type']             = 'Тип';
$_['text_column_reference']        = 'Посилання';
$_['text_column_amount']           = 'Сума';
$_['text_column_status']           = 'Статус';
$_['text_column_date_modified']    = 'Дата зміни';
$_['text_column_date_added']       = 'Дата додавання';
$_['text_column_update']           = 'Оновлення';
$_['text_column_void']             = 'Скасувати';
$_['text_confirm_capture']         = 'Ви впевнені, що хочете захопити оплату?';
$_['text_confirm_refund']          = 'Ви впевнені, що хочете повернути оплату?';
$_['text_inquire_success']         = 'Запит був успішним';
$_['text_capture_success']         = 'Запит на захоплення був успішним';
$_['text_refund_success']          = 'Запит на повернення був успішним';
$_['text_void_success']            = 'Запит на скасування був успішним';

// Вхід
$_['entry_merchant_id']            = 'Ідентифікатор продавця';
$_['entry_api_username']           = 'Ім\'я користувача API';
$_['entry_api_password']           = 'Пароль API';
$_['entry_token']                  = 'Секретний токен';
$_['entry_transaction']            = 'Транзакція';
$_['entry_environment']            = 'Середовище';
$_['entry_site']                   = 'Сайт';
$_['entry_store_cards']            = 'Зберігання карток';
$_['entry_echeck']                 = 'eCheck';
$_['entry_total']                  = 'Загальна сума';
$_['entry_geo_zone']               = 'Геозона';
$_['entry_status']                 = 'Статус';
$_['entry_logging']                = 'Логування налагодження';
$_['entry_sort_order']             = 'Порядок сортування';
$_['entry_cron_url']               = 'URL завдання Cron';
$_['entry_cron_time']              = 'Останнє виконання завдання Cron';
$_['entry_order_status_pending']    = 'В очікуванні';
$_['entry_order_status_processing'] = 'Обробка';

// Допомога
$_['help_merchant_id']             = 'Ваш особистий ідентифікатор продавця CardConnect.';
$_['help_api_username']            = 'Ваше ім\'я користувача для доступу до API CardConnect.';
$_['help_api_password']            = 'Ваш пароль для доступу до API CardConnect.';
$_['help_token']                   = 'Введіть випадковий токен для забезпечення безпеки або використовуйте згенерований.';
$_['help_transaction']             = 'Виберіть \'Payment\', щоб заспокоїти оплату негайно або \'Authorize\', щоб заспокоїти її.';
$_['help_site']                    = 'Це визначає першу частину URL API. Змінюйте лише за вказівкою.';
$_['help_store_cards']             = 'Чи бажаєте ви зберігати картки за допомогою токенізації.';
$_['help_echeck']                  = 'Чи бажаєте ви пропонувати можливість оплати за допомогою eCheck.';
$_['help_total']                   = 'Загальна сума замовлення, яку повинен досягти замовлення перед активацією цього методу оплати. Повинна бути значенням без валютного знака.';
$_['help_logging']                 = 'Увімкнення режиму налагодження записуватиме чутливі дані в файл журналу. Ви повинні завжди вимикати його, якщо не отримали відповідну інструкцію.';
$_['help_cron_url']                = 'Встановіть завдання Cron для виклику цього URL, щоб замовлення автоматично оновлювалися. Він розрахований на запуск кілька годин після останнього захоплення в робочий день.';
$_['help_cron_time']               = 'Це останній час, коли було виконано завдання Cron.';

// Кнопка
$_['button_inquire_all']           = 'Дізнатися все';
$_['button_capture']               = 'Захопити';
$_['button_refund']                = 'Повернути';
$_['button_void_all']              = 'Скасувати всі';
$_['button_inquire']               = 'Дізнатися';
$_['button_void']                  = 'Скасувати';

// Помилка
$_['error_permission']             = 'Попередження: у вас немає прав на зміну модуля оплати CardConnect!';
$_['error_merchant_id']            = 'Ідентифікатор продавця обов\'язковий!';
$_['error_api_username']           = 'Ім\'я користувача API обов\'язкове!';
$_['error_api_password']           = 'Пароль API обов\'язковий!';
$_['error_token']                  = 'Секретний токен обов\'язковий!';
$_['error_site']                   = 'Сайт обов\'язковий!';
$_['error_amount_zero']            = 'Сума повинна бути більше нуля!';
$_['error_no_order']               = 'Немає відповідної інформації про замовлення!';
$_['error_invalid_response']       = 'Отримано недійсну відповідь!';
$_['error_data_missing']           = 'Відсутні дані!';
$_['error_not_enabled']            = 'Модуль не ввімкнено!';
