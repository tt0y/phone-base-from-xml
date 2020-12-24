<p><strong>БАЗА ДАННЫХ ТЕЛЕФОННЫХ НОМЕРОВ КЛИЕНТОВ</strong></p>



<p><strong>Задача:&nbsp;&nbsp;</strong></p>



<p>Написать скрипт, считывающий xml файл с представлением результата в виде таблицы и&nbsp; сохранением данных в БД.&nbsp;</p>



<p><strong>Описание:&nbsp;</strong></p>



<p>На входе парсится xml файл clients.xml из директории проекта:&nbsp;</p>



<p>После загрузки xml данные клиента и номера разбираются и сохраняются в БД (MySql).&nbsp;</p>



<p>Необходимо предусмотреть так же и тот факт, что могут приходить данные по клиентам,&nbsp; которые уже имеются в таблице, в таком случае необходимо обновлять данные age, weight&nbsp; по клиенту и номера его телефонов, а не создавать новые записи.&nbsp;</p>



<p><strong>Формат входных данных:&nbsp;</strong></p>



<p><strong>clients.xml&nbsp;</strong></p>



<p>&lt;?xml version=&#187;1.0&#8243; encoding=&#187;UTF-8&#8243;?&gt;&nbsp;</p>



<p>&lt;clients&gt;&nbsp;</p>



<p>&nbsp;&lt;client id=&#187;5a153d02a8b116f18e940050569b68aa&#187;&gt;&nbsp;</p>



<p>&lt;membership_date&gt;2019-05-04 11:00:01&lt;/membership_date&gt;&nbsp;</p>



<p>&lt;name&gt;Василий Пчелкин&lt;/name&gt;&nbsp;</p>



<p>&lt;age&gt;18&lt;/age&gt;&nbsp;</p>



<p>&lt;city&gt;Moscow&lt;/ city &gt;&nbsp;</p>



<p>&lt;numbers&gt;&nbsp;</p>



<p>&lt;number&gt;+79999999999&lt;/number&gt;&nbsp;</p>



<p>&lt;number&gt;+78888888888&lt;/number&gt;&nbsp;</p>



<p>&lt;/numbers&gt;&nbsp;</p>



<p>&nbsp;&lt;/client&gt;&nbsp;</p>



<p>&nbsp;&lt;client id=&#187;1a147d02a8b111e98e940050569b68ad&#187;&gt;&nbsp;</p>



<p>&lt;membership_date&gt;2019-03-02 19:43:58&lt;/membership_date&gt;&nbsp;</p>



<p>&lt;name&gt;Пчелка Васильев&lt;/name&gt;&nbsp;</p>



<p>&lt;age&gt;19&lt;/age&gt;&nbsp;</p>



<p>&lt;city&gt;Bryansk&lt;/ city &gt;&nbsp;</p>



<p>&lt;numbers&gt;&nbsp;</p>



<p>&lt;number&gt;+79999999999&lt;/number&gt;&nbsp;</p>



<p>&lt;number&gt;+78888888888&lt;/number&gt;&nbsp;</p>



<p>&lt;/numbers&gt;&nbsp;</p>



<p>&nbsp;&lt;/client&gt;&nbsp;</p>



<p>&lt;/clients&gt;&nbsp;</p>



<p><strong>Формат публичной части:&nbsp;&nbsp;</strong></p>



<p>Таблица (грид) со списком клиентов c возможностью фильтрации и сортировки данных по&nbsp; полям Клиента.&nbsp;</p>



<p>В каждой строке клиент, в каждом столбце поле с данными клиента. По нажатию на кнопку&nbsp; &lt;номера телефонов&gt; необходимо подгружать номера телефонов в модальное окно.&nbsp;</p>



<p><strong>Инструментарий:&nbsp;</strong></p>



<p>PHP 7.*&nbsp;</p>



<p>Mysql&nbsp;</p>



<p>Apache / Nginx&nbsp;</p>



<p>Любой Js фреймворк на свое усмотрение&nbsp;</p>



<p>Php framework Symfony / Yii2 в зависимости от подбираемой должности.&nbsp;</p>



<p><strong>Требования к реализации&nbsp;</strong></p>



<p>Данные а БД должны быть нормализованными.&nbsp;</p>



<p>Код должен соответствовать определенному паттерну проектирования (Помимо MVC – SOLID, KISS…) c коротким пояснением, какие из принципов паттерна использованы.<br></p>
                  </div>
        
         
</article>
