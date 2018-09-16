<!doctype html>
<html lang="en">
<head class="main">
    <title>Лабораторная работа №1</title>
    <link rel="stylesheet" type="text/css" href="templates/css/style.css">
</head>
<body>
<table cellpadding="0" cellspacing="0"   align="center" class="main">
    <tr colspan="3" class="header">
            <td id="head1">Вариант 4201 </td>
            <td id="head2">Авраменко Антон</td>
            <td id="head3">P3200</td>
    </tr>
</table>
<table class="main" align="center">

    <tr>

        <td class="task_col">
            <b>Разработанная HTML-страница должна удовлетворять следующим требованиям:</b>
            <ul class="task_list">
                <li>Для расположения текстовых и графических элементов необходимо использовать табличную верстку.</li>
                <li>Данные формы должны передаваться на обработку посредством POST-запроса.</li>
                <li>Таблицы стилей должны располагаться в отдельных файлах.</li>
                <li>При работе с CSS должно быть продемонстрировано использование селекторов псевдоклассов, селекторов атрибутов, селекторов элементов, селекторов идентификаторов а также такие свойства стилей CSS, как наследование и каскадирование.</li>
                <li>HTML-страница должна иметь "шапку", содержащую ФИО студента, номер группы и новер варианта. При оформлении шапки необходимо явным образом задать шрифт (sans-serif), его цвет и размер в каскадной таблице стилей.</li>
                <li>Отступы элементов ввода должны задаваться в пикселях.</li>
                <li>Страница должна содержать сценарий на языке JavaScript, осуществляющий валидацию значений, вводимых пользователем в поля формы. Любые некорректные значения (например, буквы в координатах точки или отрицательный радиус) должны блокироваться.</li>
            </ul>
        </td>
        <td class="task_col">
            <img src="templates/img/Task.png" alt="График">
        </td>

    </tr>

    <tr>

        <td colspan="2" class="footer" >
            <form id="xyr_form" name="xyr" action="script.php" method="post"></form>
            <table id="ch_table">
                <div id="x_block">
                <tr>
                    <td></td>
                    <td>
                        <input id="X" name="X_button" type="button" value="-2">
                    </td>
                    <td>
                        <input id="X" name="X_button" type="button" value="-1.5">
                    </td>
                    <td>
                        <input id="X" name="X_button" type="button" value="-1">
                    </td>
                </tr>
                <tr>
                    <td>X=</td>
                    <td>
                        <input id="X" name="X_button" type="button" value="-0.5">
                    </td>
                    <td>
                        <input id="X" name="X_button" type="button" value="0">
                    </td>
                    <td>
                        <input id="X" name="X_button" type="button" value="0.5">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input id="X" name="X_button" type="button" value="1">
                    </td>
                    <td>
                        <input id="X" name="X_button" type="button" value="1.5">
                    </td>
                    <td>
                        <input id="X" name="X_button" type="button" value="2">
                    </td>
                </tr>
                </div>
                <div id="y_block">
                <tr>

                    <td>Y=</td>
                    <td colspan="3"><input id="Y_input" name="y_input" placeholder="Введите координату Y" required oninvalid="this.setCustomValidity('Введите Y')"
                                           oninput="setCustomValidity('')" maxlength="20" size="20"></td>
                </tr>
                </div>
                <div id="r_block">
                <tr>
                    <td>R=</td>
                    <td colspan="3" align="center">
                        <select id="R_input" name="r_input" required oninvalid="this.setCustomValidity('Выберите R из списка')" oninput="setCustomValidity('')">
                            <option value="" selected disabled>Выберите R</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </td>
                </tr>
                </div>
                <tr>
                    <td></td>
                    <td colspan="3" align="center">
                        <input type="submit" name="submit" class="submit" value="Проверить">
                    </td>
                </tr>
            </table>
        </td>
        <td id="resCol">

        </td>


    </tr>
</table>
<script type="text/javascript" src="validator.js"></script>
</body>
</html>