# majordomo-dimmer-device
Simple Devices addon (Xiaomi Gateway RGB)


* вызов по требованию/событию

callMethod('ОБЪЕКТ.action', array('color'=> '0000ff')); //аналог callMethod('ОБЪЕКТ.setColor', array('color'=> '0000ff'));

callMethod('ОБЪЕКТ.action', array('color'=> '0000ff', 'timer'=> '30')); //установка цвета на определенный интервал, далее в зависимости от свойства actionRGB при 0 - отключится, при 1 - установится в зависимости от состояний режимов.
