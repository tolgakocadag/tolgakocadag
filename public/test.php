<p>&nbsp; &nbsp; Merhabalar, bu yazımıza ge&ccedil;meden &ouml;nce veritabanı bağlantısı yapamadıysanız&nbsp;<a href="../php-pdo-ile-veritabani-baglantisi.html" target="_blank">PDO veritabanı bağlantısı</a>&nbsp;yazımıza g&ouml;z atabilirsiniz.</p>
<ul>
<li>PDO&nbsp;<strong>delete</strong>&nbsp;işlemi i&ccedil;in gereken kodlar aşağıdadır.</li>
</ul>
<p>$query = $con-&gt;prepare("DELETE FROM user WHERE user_ID = :id");<br /> $delete = $query-&gt;execute(array('id' =&gt; '30'));<br /> $delete=null;</p>
<p>&nbsp;</p>
<ul>
<li><span style="font-family: monospace;">Veri listeleme (SELECT) işlemi i&ccedil;in&nbsp;<a href="../php-pdo-ile-veri-cekme-select--islemi.html" target="_blank">buradan</a>&nbsp;diğer yazımıza g&ouml;z atabilirsiniz.</span></li>
<li><span style="font-family: monospace;">Veri&nbsp;ekleme (INSERT) işlemi i&ccedil;in&nbsp;<a href="../php-pdo-ile-veri-ekleme--Insert--islemi.html" target="_blank">buradan</a>&nbsp;diğer yazımıza g&ouml;z atabilirsiniz.</span></li>
<li><span style="font-family: monospace;">Veri g&uuml;ncelleme&nbsp;(UPDATE) işlemi i&ccedil;in&nbsp;<a href="../php-pdo-ile-veri-guncelleme--update--islemi.html" target="_blank">buradan</a>&nbsp;diğer yazımıza g&ouml;z atabilirsiniz.</span></li>
</ul>
