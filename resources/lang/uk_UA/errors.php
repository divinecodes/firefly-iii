<?php

/**
 * firefly.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    '404_header'              => 'Firefly III не може знайти цю сторінку.',
    '404_page_does_not_exist' => 'Запитувана сторінка не існує. Будь ласка, перевірте, правильність URL. Можливо зробили помилку при наборі?',
    '404_send_error'          => 'Якщо ви автоматично перенаправлені на цю сторінку, будь ласка, прийміть мої вибачення. У вашому лог файлі буде запис про цю помилку, та я б був дуже вдячний, якби ви відправили мені її.',
    '404_github_link'         => 'Якщо ви впевнені, що ця сторінка має існувати, створіть звернення <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'whoops'                  => 'Ой-йой',
    'fatal_error'             => 'Відбулася критична помилка. Будь ласка, перевірте файли журналів у "storage/logs" або використайте "docker logs -f - [container]", щоб побачити, що сталось.',
    'maintenance_mode'        => 'Firefly III знаходиться на обслуговуванні.',
    'be_right_back'           => 'Скоро повернусь!',
    'check_back'              => 'Firefly III вимкнувся для необхідного обслуговування. Будь ласка, повторіть спробу через секунду.',
    'error_occurred'          => 'Ой-йой! Сталася помилка.',
    'db_error_occurred'       => 'Ой-йой! Сталася помилка бази даних.',
    'error_not_recoverable'   => 'На жаль, цю помилку не можна виправити :(. Firefly III пошкоджено. Помилка:',
    'error'                   => 'Помилка',
    'error_location'          => 'Ця помилка сталася у файлі <span style="font-family: monospace;">:file</span> в рядку :line з кодом :code.',
    'stacktrace'              => 'Інформація про помилку',
    'more_info'               => 'Дізнатися більше',
    'collect_info'            => 'Будь ласка, знайдіть більше інформації в директорії <code>storage/logs</code> де знаходяться файли журналу. Якщо ви використовуєте Docker, скористайтесь <code>docker logs -f [container]</code>.',
    'collect_info_more'       => 'Дізнатись більше зібраної інформації щодо помилок у розділі<a href="https://docs.firefly-iii.org/faq/other#how-do-i-enable-debug-mode">запитань, які часто задають</a>.',
    'github_help'             => 'Отримати допомогу на GitHub',
    'github_instructions'     => 'Запрошуємо відкрити нове звернення через проблему <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">на GitHub</a></strong>.',
    'use_search'              => 'Скористайтеся пошуком!',
    'include_info'            => 'Додайте інформацію <a href=":link">з цієї сторінки налагодження</a>.',
    'tell_more'               => 'Дайте нам більше інформації, ніж "Сервіс не працює!"',
    'include_logs'            => 'Додайте журнал помилок (див. вище).',
    'what_did_you_do'         => 'Розкажіть нам, що ви робили.',
    'offline_header'          => 'Ви, ймовірно, не в мережі',
    'offline_unreachable'     => 'Firefly III недоступний. Ваш пристрій наразі в не в мережі або сервер не працює.',
    'offline_github'          => 'Якщо ви впевнені, що ваш пристрій та сервер в мережі, створіть звернення на <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',

];
