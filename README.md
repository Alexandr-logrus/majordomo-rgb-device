# majordomo-rgb-device
Simple Devices addon (Xiaomi Gateway RGB)


вызов по требованию/событию:

* callMethod('ОБЪЕКТ.action', array('color'=> '0000ff')); //аналог callMethod('ОБЪЕКТ.setColor', array('color'=> '0000ff'));

* callMethod('ОБЪЕКТ.action', array('color'=> '0000ff', 'timer'=> '30')); //установка цвета на определенный интервал, далее в зависимости от свойства actionRGB при 0 - отключится, при 1 - установится в зависимости от состояний режимов:

1. NobodyHomeMode.active 0 - кто-то дома, color = '00ff00' или в зависимости от состояний System.stateColor при красном color = 'ff0000', System.stateColor или Communication.stateColor при желтом color = 'ffcd00', brightness = 50 или 10 в зависимости от DarknessMode.active (Темное время суток)
2. NobodyHomeMode.active 1 - никого нет дома, color = '000000', т.е. отключена
3. NobodyHomeMode.active 2 - все спят, color = 'cd00ff', brightness = 5

* Голосовые команды:
1. включи|зажги "название ПУ"
2. выключи|потуши|отключи "название ПУ"
3. включи|зажги "название ПУ" на "число" секунд|минут|часов
4. выключи|потуши|отключи "название ПУ" через "число" секунд|минут|часов
5. яркость "название ПУ" "число"
6. цвет "название ПУ" белый|перламутровый|фиолетовый|индиго|синий|голубой|зелёный|жёлтый|оранжевый|красный