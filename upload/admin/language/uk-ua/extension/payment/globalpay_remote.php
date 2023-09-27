<?php
// Заголовок
$_['heading_title']					 = 'Globalpay Remote';

// Текст
$_['text_extension']				 = 'Розширення';
$_['text_success']					 = 'Успішно: Ви внесли зміни в дані облікового запису Globalpay!';
$_['text_edit']                      = 'Редагувати Globalpay Remote';
$_['text_card_type']				 = 'Тип картки';
$_['text_enabled']					 = 'Увімкнено';
$_['text_use_default']				 = 'Використовувати за замовчуванням';
$_['text_merchant_id']				 = 'Ідентифікатор продавця (Merchant ID)';
$_['text_subaccount']				 = 'Підрахунок (Sub Account)';
$_['text_secret']					 = 'Спільний секрет (Shared secret)';
$_['text_card_visa']				 = 'Visa';
$_['text_card_master']				 = 'Mastercard';
$_['text_card_amex']				 = 'American Express';
$_['text_card_switch']				 = 'Switch/Maestro';
$_['text_card_laser']				 = 'Laser';
$_['text_card_diners']				 = 'Diners';
$_['text_capture_ok']				 = 'Захоплення пройшло успішно';
$_['text_capture_ok_order']			 = 'Захоплення пройшло успішно, статус замовлення оновлено на успіх - закріплено';
$_['text_rebate_ok']				 = 'Повернення успішно';
$_['text_rebate_ok_order']			 = 'Повернення успішно, статус замовлення оновлено на повернено';
$_['text_void_ok']					 = 'Відміна успішна, статус замовлення оновлено на скасовано';
$_['text_settle_auto']				 = 'Авто';
$_['text_settle_delayed']			 = 'Відкладено';
$_['text_settle_multi']				 = 'Множинний';
$_['text_ip_message']				 = 'Перш ніж йти в реальний режим, вам потрібно надати ваш IP-адрес сервера вашому менеджеру облікового запису Globalpay';
$_['text_payment_info']				 = 'Інформація про оплату';
$_['text_capture_status']			 = 'Оплата забезпечена';
$_['text_void_status']				 = 'Оплата скасована';
$_['text_rebate_status']			 = 'Оплата повернута';
$_['text_order_ref']				 = 'Посилання на замовлення';
$_['text_order_total']				 = 'Загальна сума авторизована';
$_['text_total_captured']			 = 'Загальна сума захоплена';
$_['text_transactions']				 = 'Транзакції';
$_['text_confirm_void']				 = 'Ви впевнені, що хочете скасувати оплату?';
$_['text_confirm_capture']			 = 'Ви впевнені, що хочете забезпечити оплату?';
$_['text_confirm_rebate']			 = 'Ви впевнені, що хочете повернути оплату?';
$_['text_globalpay_remote']			 = '<a target="_blank" href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_void']                      = 'Скасувати';
$_['text_payment']                   = 'Оплата';
$_['text_rebate']                    = 'Повернення';

// Колонка
$_['text_column_amount']			 = 'Сума';
$_['text_column_type']				 = 'Тип';
$_['text_column_date_added']		 = 'Дата додана';

// Введення
$_['entry_merchant_id']				 = 'Ідентифікатор продавця (Merchant ID)';
$_['entry_secret']					 = 'Спільний секрет (Shared secret)';
$_['entry_rebate_password']			 = 'Пароль повернення (Rebate password)';
$_['entry_total']					 = 'Загальна сума';
$_['entry_sort_order']				 = 'Порядок сортування';
$_['entry_geo_zone']				 = 'Геозона';
$_['entry_status']					 = 'Статус';
$_['entry_debug']					 = 'Запис відладки';
$_['entry_auto_settle']				 = 'Тип розрахунку';
$_['entry_tss_check']				 = 'Перевірка TSS';
$_['entry_card_data_status']		 = 'Логування даних картки';
$_['entry_3d']						 = 'Увімкнути 3D-захист';
$_['entry_liability_shift']			 = 'Приймати сценарії без перенесення відповідальності';
$_['entry_status_success_settled']	 = 'Успіх - закріплено';
$_['entry_status_success_unsettled'] = 'Успіх - не закріплено';
$_['entry_status_decline']			 = 'Відхилено';
$_['entry_status_decline_pending']	 = 'Відхилено - офлайн авторизація';
$_['entry_status_decline_stolen']	 = 'Відхилено - втрата або крадіжка картки';
$_['entry_status_decline_bank']		 = 'Відхилено - помилка банку';
$_['entry_status_void']				 = 'Скасовано';
$_['entry_status_rebate']			 = 'Повернено';

// Допомога
$_['help_total']					 = 'Загальна сума замовлення, при досягненні якої цей метод оплати стає активним';
$_['help_card_select']				 = 'Попросіть користувача вибрати тип їх картки перед переадресацією';
$_['help_notification']				 = 'Вам потрібно надати цей URL-адресу Globalpay для отримання повідомлень про оплату';
$_['help_debug']					 = 'Увімкнення відладки буде записувати чутливі дані в журнал. Ви повинні завжди вимикати це, якщо вас не просять зробити інакше';
$_['help_liability']				 = 'Прийняття відповідальності означає, що ви все одно приймаєте платежі, коли користувач не пройшов 3D-захист';
$_['help_card_data_status']			 = 'Реєструє останні 4 цифри картки, строк дії, ім\'я, тип і банк емітент';

// Вкладка
$_['tab_api']					     = 'Деталі API';
$_['tab_account']				     = 'Облікові записи';
$_['tab_order_status']				 = 'Статуси замовлення';
$_['tab_payment']					 = 'Налаштування оплати';

// Кнопка
$_['button_capture']				 = 'Захопити';
$_['button_rebate']					 = 'Повернути / відмінити';
$_['button_void']					 = 'Скасувати';

// Помилка
$_['error_merchant_id']				 = 'Ідентифікатор продавця (Merchant ID) обов\'язковий';
$_['error_secret']					 = 'Спільний секрет (Shared secret) обов\'язковий';
