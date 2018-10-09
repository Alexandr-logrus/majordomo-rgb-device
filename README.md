# majordomo-dimmer-device
Simple Devices addon (Xiaomi Gateway RGB)

Прописать вызов из:

* класса systemStates, метода stateChanged на уровне класса
callMethod('ОБЪЕКТ.action');

* класса OperationalModes, метода modeChanged на уровне объекта NobodyHomeMode
callMethod('ОБЪЕКТ.action');

* класса OperationalModes, метода modeChanged на уровне объекта DarknessMode
callMethod('ОБЪЕКТ.action');

* вызов по требованию

callMethod('ОБЪЕКТ.action'); //без параметров

callMethod('ОБЪЕКТ.action', array('color'=> '0000ff'));

callMethod('ОБЪЕКТ.action', array('color'=> '0000ff','timer'=> '30'));
