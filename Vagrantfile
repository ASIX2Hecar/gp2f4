Vagrant.configure("2") do |config|
  config.vm.box = "debian/bullseye64"
  config.vm.hostname = "grup10.fjeclot10.net"
  config.vm.provider "virtualbox" do |v|
    # v.gui = true
    v.name = "grup10"
    v.memory = 2048
    v.cpus = 2
    v.customize ['modifyvm', :id, '--clipboard', 'bidirectional']   
   config.vm.network "public_network", type: "dhcp", :bridge => 'en4: Thunderbolt Ethernet'
   config.vm.synced_folder "codi/", "/var/www/html"
  end

  config.vm.network "forwarded_port", guest: 80, host: 8000
  config.vm.network "forwarded_port", guest: 443, host: 8443
  
  config.vm.provision "shell", inline: <<-SHELL
    sudo apt-get update -y
    sudo apt-get upgrade -y
    sudo apt-get install -y net-tools
    sudo apt-get install -y apache2 apache2-doc
    sudo apt-get install -y libapache2-mod-php
    sudo apt-get install -y php7.4
    sudo apt-get install -y mariadb-server mariadb-client
	sudo apt-get install -y php7.4-mysql
	sudo apt-get install composer
  SHELL

end
