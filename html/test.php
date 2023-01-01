<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Html</title>
      <!-- syntaxhighlighter -->
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/default.min.css">
      <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
</head>
<body>
      <h1>Html</h1>
      <p>HTML - это стандартный язык разметки веб-страниц.</p>
      
      <h2>Элемент HTML</h2>
      <p>Элемент HTML — это все, от начального тега до конечного тега</p>
      <div class="code">
            <pre><code class="language-html hljs">&lt;p&gt;Абзац.&lt;/p&gt;</code></pre>
      </div>
      <p>Некоторые элементы HTML не имеют содержимого (например, элемент <code>&lt;br&gt;</code>). Эти элементы называются пустыми элементами. Пустые элементы не имеют закрывающего тега!</p>
      <p>Одни теги могут быть вложены в другие. Строчные могут быть вложены в блочные, но не наоборот.</p>
      <p>Следует следить за правильной вложенностью, чтобы теги не пересекались. Сначала нужно закрывать тег, который последний открывался.</p>
      <p>Не забывайте закрывать теги.</p>
      <p>HTML не чувствителен к регистру, но лучше все писать в нижнем регистре.</p>
      <h3>HTML-атрибуты</h3>
      <p>Элементы могут иметь атрибуты. Атрибуты HTML предоставляют дополнительную информацию об элементах HTML. Пишутся всегда в открывающем теге: <code>имя_атрибута = "значение атрибута"</code>, значение может быть заключено в одинарные или двойные кавычки.</p>
      <p>В атрибуте <code>style</code> можно задавать стили.</p>
      <div class="code">
            <pre><code class="language-html hljs">&lt;img src="image.jpg" style="width: 300px; height: 100px;"&gt;</code></pre>
      </div>
      <p>В атрибуте <code>title</code> можно задавать дополнительную информацию (отображается всплывающем окне при наведении на элемент).</p>
      
      <h2>Структура HTML-страницы</h2>
      <img src="../images/structure.png" alt="Structure HTML">
      <p>Содержимое раздела <code>&lt;head&gt;</code> не будет отображаться в браузере, в нем содержится служебная информация для баузера и поисковых систем. Только содержимое элемента <code>&lt;title&gt;</code> будет отображаться в строке заголовка браузера или на вкладке страницы.</p>
      <p>Содержимое раздела <code>&lt;body&gt;</code> (белая область выше) будет отображаться в браузере.</p>

      <h2>HTML-заголовки</h2>
      <h1>&lt;h1&gt;Заголовок 1 уровня&lt;/h1&gt;</h1>
      <h2>&lt;h2&gt;Заголовок 2 уровня&lt;/h2&gt;</h2>
      <h3>&lt;h3&gt;Заголовок 3 уровня&lt;/h3&gt;</h3>
      <h4>&lt;h4&gt;Заголовок 4 уровня&lt;/h4&gt;</h4>
      <h5>&lt;h5&gt;Заголовок 5 уровня&lt;/h5&gt;</h5>
      <h6>&lt;h6&gt;Заголовок 6 уровня&lt;/h6&gt;</h6>

      <h2>HTML-ссылки</h2>
      <p>HTML-ссылки задаются тегом <code>&lt;a&gt;</code>:</p>
      <div class="code">
            <pre><code class="language-html hljs">&lt;a href="https://ya.ru"&gt;Yandex&lt;/a&gt;</code></pre>
      </div>
      <p>Анкор находится между открывающим и закрывающим тегом <code>&lt;a&gt;</code>, по клику на который мы перейдем на страницу по ссылке в атрибуте <code>href</code>.</p>

      <h2>HTML-изображения</h2>
      <p>Задаются с помощью тега <code>&lt;img&gt;</code></p>
      <p>Атрибуты:</p>
      <ul>
            <li><code>src</code> - адрес изображения;</li>
            <li><code>alt</code> - альтернативный текст (отображается если изображение не найдено);</li>
            <li>с помощью атрибутов <code>height</code> и <code>width</code> - можно задать ширину и высоту, но лучше это делать через стили CSS.</li>
      </ul>
      <div class="code">
            <pre><code class="language-html hljs">&lt;img src="cat.jpg" alt="Кошка"&gt;</code></pre>
      </div>


</body>
</html>