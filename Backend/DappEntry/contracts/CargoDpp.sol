pragma solidity ^0.6.0;
 contract CargoDapp {
 	//**MAPPING**
 	mapping(uint => Cargo) public cargos;
 	mapping(uint => CargoData) public cargodatas;
 	mapping(uint => Receiver) public receivers;
	mapping(uint => Receivers) public receiverss;
	mapping(uint => Sender) public senders;
 	mapping(uint => Senders) public senderss;

	//**STRUCTURES**
 	struct Cargo{
        string num;
		string Date;
		string Mode;
 	}
 	
	struct CargoData{
	    string Product;
		uint Weight;
		uint Cost;
	    
	}

	struct Sender{
		string SName;
		string SAddress;
		string SDistrict;
	}

	struct Senders{
		uint SMobile;
		string SEmail;
		string SExactPlace;
	}

	struct Receiver{
	    string RName;
		string RAddress;
		string RDistrict;
	}
	
	struct Receivers{
		uint RMobile;
		string REmail;
		string RExactPlace;
	}




	//**function for cargo --**
	function addCargo(uint _id,string memory _num,string memory _Date,string memory _Mode) public {
	    cargos[_id] = Cargo(_num, _Date, _Mode);
	}
	
	function addCargoData(uint _id,string memory _Product,uint _Weight,uint _Cost) public {
		cargodatas[_id]= CargoData(_Product, _Weight, _Cost);
	}
	
	//**function for Receiver--**
	function addReceiver(uint _id,string memory _RName,string memory _RAddress,string memory _RDistrict) public {
		receivers[_id]= Receiver(_RName, _RAddress, _RDistrict);
	}
	function addReceivers(uint _id,uint _RMobile,string memory _REmail,string memory _RExactPlace) public {
	    receiverss[_id]= Receivers(_RMobile, _REmail, _RExactPlace);
	}
	
	//**function for Sender--**
	function addSender(uint _id,string memory _SName,string memory _SAddress,string memory _SDistrict) public {
		senders[_id]= Sender(_SName, _SAddress, _SDistrict);
	}

	function addSenders(uint _id,uint _SMobile,string memory _SEmail,string memory _SExactPlace) public {
		senderss[_id]= Senders(_SMobile, _SEmail, _SExactPlace);
	}
	
}
//------END------