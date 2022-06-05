//===============================================
class GDate extends GObject {
    //===============================================
    constructor() {
		super();
		this.day = "";
		this.month = "";
		this.year = "";
		this.hour = "";
		this.minute = "";
		this.second = "";
    }
    //===============================================
	runDate() {
		var lDate = new Date();
		this.day = lDate.getDate() + "";
		this.month = lDate.getMonth() + 1 + "";
		this.year = lDate.getFullYear() + "";
		this.hour = lDate.getHours() + "";
		this.minute = lDate.getMinutes() + "";
		this.second = lDate.getSeconds() + "";
		//
		this.day = this.day.padStart(2, '0');
		this.month = this.month.padStart(2, '0');
		this.year = this.year.padStart(4, '0');
		this.hour = this.hour.padStart(2, '0');
		this.minute = this.minute.padStart(2, '0');
		this.second = this.second.padStart(2, '0');
	}	
    //===============================================
	getDate() {
		this.runDate();
		var lDate = sprintf("%s/%s/%s %s:%s:%s"
		, this.day, this.month, this.year, this.hour, this.minute, this.second);
		return lDate;
	}	
    //===============================================
}
//===============================================
