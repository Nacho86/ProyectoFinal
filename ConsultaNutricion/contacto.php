<?php


        class contacto
        {

            private $nombre;
            private $correo;
            private $telefono;
            private $mensaje;
            private $ID_Mensaje;

            /**
             * contacto constructor.
             * @param $nombre
             * @param $correo
             * @param $telefono
             * @param $mensaje
             * @param $ID_Mensaje
             */
            public function __construct($nombre=" ", $correo=" ", $telefono=" ", $mensaje=" ", $ID_Mensaje=" ")
            {
                $this->nombre = $nombre;
                $this->correo = $correo;
                $this->telefono = $telefono;
                $this->mensaje = $mensaje;
                $this->ID_Mensaje = $ID_Mensaje;
            }

            /**
             * @return string
             */
            public function getNombre(): string
            {
                return $this->nombre;
            }

            /**
             * @param string $nombre
             * @return contacto
             */
            public function setNombre(string $nombre): contacto
            {
                $this->nombre = $nombre;
                return $this;
            }

            /**
             * @return string
             */
            public function getCorreo(): string
            {
                return $this->correo;
            }

            /**
             * @param string $correo
             * @return contacto
             */
            public function setCorreo(string $correo): contacto
            {
                $this->correo = $correo;
                return $this;
            }

            /**
             * @return string
             */
            public function getTelefono(): string
            {
                return $this->telefono;
            }

            /**
             * @param string $telefono
             * @return contacto
             */
            public function setTelefono(string $telefono): contacto
            {
                $this->telefono = $telefono;
                return $this;
            }

            /**
             * @return string
             */
            public function getMensaje(): string
            {
                return $this->mensaje;
            }

            /**
             * @param string $mensaje
             * @return contacto
             */
            public function setMensaje(string $mensaje): contacto
            {
                $this->mensaje = $mensaje;
                return $this;
            }

            /**
             * @return string
             */
            public function getIDMensaje(): string
            {
                return $this->ID_Mensaje;
            }

            /**
             * @param string $ID_Mensaje
             * @return contacto
             */
            public function setIDMensaje(string $ID_Mensaje): contacto
            {
                $this->ID_Mensaje = $ID_Mensaje;
                return $this;
            }



        }

