
<h1>Hello!</h1>
<div id="main">

    <p>Головна >> Змінні та типи данних</p>
    <div class="left">

        <div class="heading">
            <div class="image">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/lesson_logo.png">
            </div>
            <div>
                <p>
                    Модуль: <b>Мова програмування PHP</b><br />
                    Урок 3: <b>Змінні та типи данних</b><br />
                    Тип: <i>лекція</i> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/dudka.png">    Тривалість: <i>40 хв</i> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/clock.png"><br/>
                    (4 з 6 занятть)<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/medal.png"><br/>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress_valid.png">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress.png">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/progress.png">
                </p>
            </div>
        </div>
    </div>
    <div class="right">

        <div class="heading">
            <div class="image">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/teacher.jpg">
            </div>
            <div>
                <p>
                    <span style="color: darkblue">Викладач:</span> <br/><br/>
                    Орест Остапович Бендер<br />
                    orest@intita.org, orest@gmail.com<br/>
                    /067/ 777 77 77, /097/ 777 77 77<br/>
                    skype: <b>orest.ostapovich</b>
                </p>
            </div>
        </div>
    </div>
    <hr />
    <div class="left">
        <div id="lesson">
            <h1>Змінні та типи данних в PHP</h1>
            <p>
                <span style="font-size: large; ">Зміст</span> <a href="/">(показати) </a> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow_open.png">
            </p>
            <p>
                <b>Змінна</b> - це літературно-символьне подання частини інформації, яка перебуває в пам’яті WEB-сервера.<br/>
                <br/>
                В php змінна виглядає ось так:
            </p>
            <div class="code">
                $names = <span style="color: #ff0000"> "я інформація в пам’яті тчк" </span> ;
            </div>
            <p>
                <b>Імена змінних</b><br/><br/>
                Будь-яка змінна в PHP має ім’я, що починається зі знаку $, наприклад $variable.
                При такому способы формування імен змінних їх дуже легко відрізнити від іншого коду.
                Якщо в інших мовах іноді може виникати плутанина з тим що при першому погляді на код
                не завжди ясно - де тут змінні, а де функції, то в PHP це питання навіть не постає.
                Наприклад послання на змінну по її імені, що зберігається в іншій змінній:
            </p>
            <div class="code">
                $name = value;<br/>
                $value = 5;<br/>
                echo $$name;
            </div>
            <p>
                Змінні в PHP представляються у вигляді рядка, що починається знаком доллара, а за ним слідує ім’я
                змінної. Ім’я змінної може складатись з латинських літер, звичайних цифр і деяких символів
                або комбінацій літер, цифр і символів.<br/><br/>

                <b>Всі змінні діляться на певні типи:</b><br/><br/>

                Мова JavaScript містить шість типів данних <b>Undefined</b>(невизначений), <b>Null</b>(нульовий),
                <b>String</b>(строковий), <b>Boolean</b>(логічний), <b>Number</b>(числовий),
                <b>Object</b>(об’єктний). Ця відносно невелика кількість типів дозволяє, тим не менше,
                створювати повноцінні сценарії для використання багатьох функцій.
            </p>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/button_instruction_line.png">
            <div id="instruction">

                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/gears.png">


                <div>
                    <ol>
                        <li>
                            On line 7 set <span style="color: #339933; font-weight: bold">
                                $</span><span style="color: darkblue; font-weight: bold">items</span>
                            to the number greater then 5. Make sure to put a semicolon at the and of the line.
                        </li>
                        <li>
                            On line 9, edite the state condition so that your program will be print
                            out text like this <span style="background: #ff0000; color: #ffffff; font-weight: bold">
                                You have10% discount!
                            </span>
                        </li>
                    </ol>

                </div>
            </div>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/button_task_line.png">
            <div id="task">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/schedule.png">
                <div>
                    <ol>
                        <li>
                            On line 7 set equal to a number greater than 5. Make sure to put a
                            semicolon at the and of the line. <br/><br/>
                            <a href="/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow.png">
                            Відповісти</a><br/><br/>
                        </li>
                        <li>
                            An if statement is made up of the if keyword, a condition like we've seen
                            before <span style="color: #339933; font-weight: bold">
                                $</span><span style="color: darkblue; font-weight: bold">terms</span>,
                            and a pair of curly braces <span style="color: darkblue; font-weight: bold">{}</span>.
                            If the answer to the condition is yes, the code inside the curly braces will run.<br/><br/>
                            <a href="/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/arrow.png">
                            Відповісти</a><br/><br/>
                        </li>
                        <li>
                            Резиновая по ширине, изменяется с изминением окна <span style="color: #339933; font-weight: bold">
                                $</span><span style="color: darkblue; font-weight: bold">terms</span>, браузера,
                            или с расширением окна.
                        </li>
                    </ol>
                    <form>
                        <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/pricol.png"></p>
                        <p><textarea rows="10" cols="45" name="text"></textarea></p>
                        <p style="text-align: end; padding-right: 15px;"><input type="image" src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/button_answer.png"</p>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="right">
        <div id="video">
            <h4 style="color: darkblue">Відео 1</h4>
            <iframe width="440" height="300"
                    src="http://www.youtube.com/embed/XGSy3_Czz8k">
            </iframe>
        </div>
    </div>


</div>