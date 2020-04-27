<?php

class anamnesi
{
	public $fecha;
	public $ID_paciente;
	public $motivoConsulta;
	public $propositosConseguir;
	public $motivoAcudir;
	public $dietasAnteriores;
	public $oscilacionesPeso;
	public $supusoEsfuerzo;
	public $motivoAbandono;
	public $desdeDieta;
	public $tipoDieta;
	public $beneficiosPersonales;
	public $patologiasActuales;
	public $bioquimicosTG;
	public $glucosa;
	public $Fe;
	public $VCM;
	public $TSH;
	public $transaminasas;
	public $Urea;
	public $creatina;
	public $colesterol;
	public $restricciones;
	public $causasPatologicas;
	public $otrasPatologias;
	public $antecedentes;
	public $analitica;
	public $operaciones;
	public $causasOperaciones;
	public $tomasFarmacos;
	public $deposiciones;
	public $alergias;
	public $intolerancias;
	public $menstruacion;
	public $tiempoLibre;
	public $quienVives;
	public $quienCocina;
	public $actividadFisica;
	public $gustaHacer;
	public $pondriaProposito;
	public $dedicas;
	public $horario;
	public $desplazamiento;
	public $dondeCome;
	public $horasDuerme;
	public $habitosToxicos;
	public $desayuno;
	public $almuerzo;
	public $comida;
	public $merienda;
	public $cena;
	public $cuestionarioFrecuencia;
	public $preferencia;
	public $aversiones;
	public $picoteo;
	public $cuantasVecesPicas;
	public $cantidadPicas;
	public $comesFuera;
	public $cuantasVeces;
	public $tipoComida;
	public $motivoComesFuera;
	public $repitesPlato;
	public $tiempoComer;
	public $hacerCompra;
	public $gustaCocinar;
	public $mientrasComes;
	public $peso;
	public $talla;
	public $cintura;
	public $cadera;
	public $tensionArterial;
	public $codoMunyeca;
	public $resumen;
	public $conclusiones;
	public $primeraImpresion;
	public $objetivos;
	public $observaciones;

    public function __construct($fecha=" ", $ID_paciente=" ", $motivoConsulta=" ", $propositosConseguir=" ", $motivoAcudir=" ", $dietasAnteriores=" ", $oscilacionesPeso=" ", $supusoEsfuerzo=" ", $motivoAbandono=" ", $desdeDieta=" ", $tipoDieta=" ", $beneficiosPersonales=" ", $patologiasActuales=" ", $bioquimicosTG=" ", $glucosa=" ", $Fe=" ", $VCM=" ", $TSH=" ", $transaminasas=" ", $Urea=" ", $creatina=" ", $colesterol=" ", $restricciones=" ", $causasPatologicas=" ", $otrasPatologias=" ", $antecedentes=" ", $analitica=" ", $operaciones=" ", $causasOperaciones=" ", $tomasFarmacos=" ", $deposiciones=" ", $alergias=" ", $intolerancias=" ", $menstruacion=" ", $tiempoLibre=" ", $quienVives=" ", $quienCocina=" ", $actividadFisica=" ", $gustaHacer=" ", $pondriaProposito=" ", $dedicas=" ", $horario=" ", $desplazamiento=" ", $dondeCome=" ", $horasDuerme=" ", $habitosToxicos=" ", $desayuno=" ", $almuerzo=" ", $comida=" ", $merienda=" ", $cena=" ", $cuestionarioFrecuencia=" ", $preferencia=" ", $aversiones=" ", $picoteo=" ", $cuantasVecesPicas=" ", $cantidadPicas=" ", $comesFuera=" ", $cuantasVeces=" ", $tipoComida=" ", $motivoComesFuera=" ", $repitesPlato=" ", $tiempoComer=" ", $hacerCompra=" ", $gustaCocinar=" ", $mientrasComes=" ", $peso=" ", $talla=" ", $cintura=" ", $cadera=" ", $tensionArterial=" ", $codoMunyeca=" ", $resumen=" ", $conclusiones=" ", $primeraImpresion=" ", $objetivos=" ", $observaciones=" ")
    {
        $this->fecha = $fecha;
        $this->ID_paciente = $ID_paciente;
        $this->motivoConsulta = $motivoConsulta;
        $this->propositosConseguir = $propositosConseguir;
        $this->motivoAcudir = $motivoAcudir;
        $this->dietasAnteriores = $dietasAnteriores;
        $this->oscilacionesPeso = $oscilacionesPeso;
        $this->supusoEsfuerzo = $supusoEsfuerzo;
        $this->motivoAbandono = $motivoAbandono;
        $this->desdeDieta = $desdeDieta;
        $this->tipoDieta = $tipoDieta;
        $this->beneficiosPersonales = $beneficiosPersonales;
        $this->patologiasActuales = $patologiasActuales;
        $this->bioquimicosTG = $bioquimicosTG;
        $this->glucosa = $glucosa;
        $this->Fe = $Fe;
        $this->VCM = $VCM;
        $this->TSH = $TSH;
        $this->transaminasas = $transaminasas;
        $this->Urea = $Urea;
        $this->creatina = $creatina;
        $this->colesterol = $colesterol;
        $this->restricciones = $restricciones;
        $this->causasPatologicas = $causasPatologicas;
        $this->otrasPatologias = $otrasPatologias;
        $this->antecedentes = $antecedentes;
        $this->analitica = $analitica;
        $this->operaciones = $operaciones;
        $this->causasOperaciones = $causasOperaciones;
        $this->tomasFarmacos = $tomasFarmacos;
        $this->deposiciones = $deposiciones;
        $this->alergias = $alergias;
        $this->intolerancias = $intolerancias;
        $this->menstruacion = $menstruacion;
        $this->tiempoLibre = $tiempoLibre;
        $this->quienVives = $quienVives;
        $this->quienCocina = $quienCocina;
        $this->actividadFisica = $actividadFisica;
        $this->gustaHacer = $gustaHacer;
        $this->pondriaProposito = $pondriaProposito;
        $this->dedicas = $dedicas;
        $this->horario = $horario;
        $this->desplazamiento = $desplazamiento;
        $this->dondeCome = $dondeCome;
        $this->horasDuerme = $horasDuerme;
        $this->habitosToxicos = $habitosToxicos;
        $this->desayuno = $desayuno;
        $this->almuerzo = $almuerzo;
        $this->comida = $comida;
        $this->merienda = $merienda;
        $this->cena = $cena;
        $this->cuestionarioFrecuencia = $cuestionarioFrecuencia;
        $this->preferencia = $preferencia;
        $this->aversiones = $aversiones;
        $this->picoteo = $picoteo;
        $this->cuantasVecesPicas = $cuantasVecesPicas;
        $this->cantidadPicas = $cantidadPicas;
        $this->comesFuera = $comesFuera;
        $this->cuantasVeces = $cuantasVeces;
        $this->tipoComida = $tipoComida;
        $this->motivoComesFuera = $motivoComesFuera;
        $this->repitesPlato = $repitesPlato;
        $this->tiempoComer = $tiempoComer;
        $this->hacerCompra = $hacerCompra;
        $this->gustaCocinar = $gustaCocinar;
        $this->mientrasComes = $mientrasComes;
        $this->peso = $peso;
        $this->talla = $talla;
        $this->cintura = $cintura;
        $this->cadera = $cadera;
        $this->tensionArterial = $tensionArterial;
        $this->codoMunyeca = $codoMunyeca;
        $this->resumen = $resumen;
        $this->conclusiones = $conclusiones;
        $this->primeraImpresion = $primeraImpresion;
        $this->objetivos = $objetivos;
        $this->observaciones = $observaciones;
    }

    /**
     * @return string
     */
    public function getFecha(): string
    {
        return $this->fecha;
    }

    /**
     * @param string $fecha
     * @return anamnesi
     */
    public function setFecha(string $fecha): anamnesi
    {
        $this->fecha = $fecha;
        return $this;
    }

    /**
     * @return string
     */
    public function getIDPaciente(): string
    {
        return $this->ID_paciente;
    }

    /**
     * @param string $ID_paciente
     * @return anamnesi
     */
    public function setIDPaciente(string $ID_paciente): anamnesi
    {
        $this->ID_paciente = $ID_paciente;
        return $this;
    }

    /**
     * @return string
     */
    public function getMotivoConsulta(): string
    {
        return $this->motivoConsulta;
    }

    /**
     * @param string $motivoConsulta
     * @return anamnesi
     */
    public function setMotivoConsulta(string $motivoConsulta): anamnesi
    {
        $this->motivoConsulta = $motivoConsulta;
        return $this;
    }

    /**
     * @return string
     */
    public function getPropositosConseguir(): string
    {
        return $this->propositosConseguir;
    }

    /**
     * @param string $propositosConseguir
     * @return anamnesi
     */
    public function setPropositosConseguir(string $propositosConseguir): anamnesi
    {
        $this->propositosConseguir = $propositosConseguir;
        return $this;
    }

    /**
     * @return string
     */
    public function getMotivoAcudir(): string
    {
        return $this->motivoAcudir;
    }

    /**
     * @param string $motivoAcudir
     * @return anamnesi
     */
    public function setMotivoAcudir(string $motivoAcudir): anamnesi
    {
        $this->motivoAcudir = $motivoAcudir;
        return $this;
    }

    /**
     * @return string
     */
    public function getDietasAnteriores(): string
    {
        return $this->dietasAnteriores;
    }

    /**
     * @param string $dietasAnteriores
     * @return anamnesi
     */
    public function setDietasAnteriores(string $dietasAnteriores): anamnesi
    {
        $this->dietasAnteriores = $dietasAnteriores;
        return $this;
    }

    /**
     * @return string
     */
    public function getOscilacionesPeso(): string
    {
        return $this->oscilacionesPeso;
    }

    /**
     * @param string $oscilacionesPeso
     * @return anamnesi
     */
    public function setOscilacionesPeso(string $oscilacionesPeso): anamnesi
    {
        $this->oscilacionesPeso = $oscilacionesPeso;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupusoEsfuerzo(): string
    {
        return $this->supusoEsfuerzo;
    }

    /**
     * @param string $supusoEsfuerzo
     * @return anamnesi
     */
    public function setSupusoEsfuerzo(string $supusoEsfuerzo): anamnesi
    {
        $this->supusoEsfuerzo = $supusoEsfuerzo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMotivoAbandono(): string
    {
        return $this->motivoAbandono;
    }

    /**
     * @param string $motivoAbandono
     * @return anamnesi
     */
    public function setMotivoAbandono(string $motivoAbandono): anamnesi
    {
        $this->motivoAbandono = $motivoAbandono;
        return $this;
    }

    /**
     * @return string
     */
    public function getDesdeDieta(): string
    {
        return $this->desdeDieta;
    }

    /**
     * @param string $desdeDieta
     * @return anamnesi
     */
    public function setDesdeDieta(string $desdeDieta): anamnesi
    {
        $this->desdeDieta = $desdeDieta;
        return $this;
    }

    /**
     * @return string
     */
    public function getTipoDieta(): string
    {
        return $this->tipoDieta;
    }

    /**
     * @param string $tipoDieta
     * @return anamnesi
     */
    public function setTipoDieta(string $tipoDieta): anamnesi
    {
        $this->tipoDieta = $tipoDieta;
        return $this;
    }

    /**
     * @return string
     */
    public function getBeneficiosPersonales(): string
    {
        return $this->beneficiosPersonales;
    }

    /**
     * @param string $beneficiosPersonales
     * @return anamnesi
     */
    public function setBeneficiosPersonales(string $beneficiosPersonales): anamnesi
    {
        $this->beneficiosPersonales = $beneficiosPersonales;
        return $this;
    }

    /**
     * @return string
     */
    public function getPatologiasActuales(): string
    {
        return $this->patologiasActuales;
    }

    /**
     * @param string $patologiasActuales
     * @return anamnesi
     */
    public function setPatologiasActuales(string $patologiasActuales): anamnesi
    {
        $this->patologiasActuales = $patologiasActuales;
        return $this;
    }

    /**
     * @return string
     */
    public function getBioquimicosTG(): string
    {
        return $this->bioquimicosTG;
    }

    /**
     * @param string $bioquimicosTG
     * @return anamnesi
     */
    public function setBioquimicosTG(string $bioquimicosTG): anamnesi
    {
        $this->bioquimicosTG = $bioquimicosTG;
        return $this;
    }

    /**
     * @return string
     */
    public function getGlucosa(): string
    {
        return $this->glucosa;
    }

    /**
     * @param string $glucosa
     * @return anamnesi
     */
    public function setGlucosa(string $glucosa): anamnesi
    {
        $this->glucosa = $glucosa;
        return $this;
    }

    /**
     * @return string
     */
    public function getFe(): string
    {
        return $this->Fe;
    }

    /**
     * @param string $Fe
     * @return anamnesi
     */
    public function setFe(string $Fe): anamnesi
    {
        $this->Fe = $Fe;
        return $this;
    }

    /**
     * @return string
     */
    public function getVCM(): string
    {
        return $this->VCM;
    }

    /**
     * @param string $VCM
     * @return anamnesi
     */
    public function setVCM(string $VCM): anamnesi
    {
        $this->VCM = $VCM;
        return $this;
    }

    /**
     * @return string
     */
    public function getTSH(): string
    {
        return $this->TSH;
    }

    /**
     * @param string $TSH
     * @return anamnesi
     */
    public function setTSH(string $TSH): anamnesi
    {
        $this->TSH = $TSH;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransaminasas(): string
    {
        return $this->transaminasas;
    }

    /**
     * @param string $transaminasas
     * @return anamnesi
     */
    public function setTransaminasas(string $transaminasas): anamnesi
    {
        $this->transaminasas = $transaminasas;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrea(): string
    {
        return $this->Urea;
    }

    /**
     * @param string $Urea
     * @return anamnesi
     */
    public function setUrea(string $Urea): anamnesi
    {
        $this->Urea = $Urea;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatina(): string
    {
        return $this->creatina;
    }

    /**
     * @param string $creatina
     * @return anamnesi
     */
    public function setCreatina(string $creatina): anamnesi
    {
        $this->creatina = $creatina;
        return $this;
    }

    /**
     * @return string
     */
    public function getColesterol(): string
    {
        return $this->colesterol;
    }

    /**
     * @param string $colesterol
     * @return anamnesi
     */
    public function setColesterol(string $colesterol): anamnesi
    {
        $this->colesterol = $colesterol;
        return $this;
    }

    /**
     * @return string
     */
    public function getRestricciones(): string
    {
        return $this->restricciones;
    }

    /**
     * @param string $restricciones
     * @return anamnesi
     */
    public function setRestricciones(string $restricciones): anamnesi
    {
        $this->restricciones = $restricciones;
        return $this;
    }

    /**
     * @return string
     */
    public function getCausasPatologicas(): string
    {
        return $this->causasPatologicas;
    }

    /**
     * @param string $causasPatologicas
     * @return anamnesi
     */
    public function setCausasPatologicas(string $causasPatologicas): anamnesi
    {
        $this->causasPatologicas = $causasPatologicas;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtrasPatologias(): string
    {
        return $this->otrasPatologias;
    }

    /**
     * @param string $otrasPatologias
     * @return anamnesi
     */
    public function setOtrasPatologias(string $otrasPatologias): anamnesi
    {
        $this->otrasPatologias = $otrasPatologias;
        return $this;
    }

    /**
     * @return string
     */
    public function getAntecedentes(): string
    {
        return $this->antecedentes;
    }

    /**
     * @param string $antecedentes
     * @return anamnesi
     */
    public function setAntecedentes(string $antecedentes): anamnesi
    {
        $this->antecedentes = $antecedentes;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnalitica(): string
    {
        return $this->analitica;
    }

    /**
     * @param string $analitica
     * @return anamnesi
     */
    public function setAnalitica(string $analitica): anamnesi
    {
        $this->analitica = $analitica;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperaciones(): string
    {
        return $this->operaciones;
    }

    /**
     * @param string $operaciones
     * @return anamnesi
     */
    public function setOperaciones(string $operaciones): anamnesi
    {
        $this->operaciones = $operaciones;
        return $this;
    }

    /**
     * @return string
     */
    public function getCausasOperaciones(): string
    {
        return $this->causasOperaciones;
    }

    /**
     * @param string $causasOperaciones
     * @return anamnesi
     */
    public function setCausasOperaciones(string $causasOperaciones): anamnesi
    {
        $this->causasOperaciones = $causasOperaciones;
        return $this;
    }

    /**
     * @return string
     */
    public function getTomasFarmacos(): string
    {
        return $this->tomasFarmacos;
    }

    /**
     * @param string $tomasFarmacos
     * @return anamnesi
     */
    public function setTomasFarmacos(string $tomasFarmacos): anamnesi
    {
        $this->tomasFarmacos = $tomasFarmacos;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeposiciones(): string
    {
        return $this->deposiciones;
    }

    /**
     * @param string $deposiciones
     * @return anamnesi
     */
    public function setDeposiciones(string $deposiciones): anamnesi
    {
        $this->deposiciones = $deposiciones;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlergias(): string
    {
        return $this->alergias;
    }

    /**
     * @param string $alergias
     * @return anamnesi
     */
    public function setAlergias(string $alergias): anamnesi
    {
        $this->alergias = $alergias;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntolerancias(): string
    {
        return $this->intolerancias;
    }

    /**
     * @param string $intolerancias
     * @return anamnesi
     */
    public function setIntolerancias(string $intolerancias): anamnesi
    {
        $this->intolerancias = $intolerancias;
        return $this;
    }

    /**
     * @return string
     */
    public function getMenstruacion(): string
    {
        return $this->menstruacion;
    }

    /**
     * @param string $menstruacion
     * @return anamnesi
     */
    public function setMenstruacion(string $menstruacion): anamnesi
    {
        $this->menstruacion = $menstruacion;
        return $this;
    }

    /**
     * @return string
     */
    public function getTiempoLibre(): string
    {
        return $this->tiempoLibre;
    }

    /**
     * @param string $tiempoLibre
     * @return anamnesi
     */
    public function setTiempoLibre(string $tiempoLibre): anamnesi
    {
        $this->tiempoLibre = $tiempoLibre;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuienVives(): string
    {
        return $this->quienVives;
    }

    /**
     * @param string $quienVives
     * @return anamnesi
     */
    public function setQuienVives(string $quienVives): anamnesi
    {
        $this->quienVives = $quienVives;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuienCocina(): string
    {
        return $this->quienCocina;
    }

    /**
     * @param string $quienCocina
     * @return anamnesi
     */
    public function setQuienCocina(string $quienCocina): anamnesi
    {
        $this->quienCocina = $quienCocina;
        return $this;
    }

    /**
     * @return string
     */
    public function getActividadFisica(): string
    {
        return $this->actividadFisica;
    }

    /**
     * @param string $actividadFisica
     * @return anamnesi
     */
    public function setActividadFisica(string $actividadFisica): anamnesi
    {
        $this->actividadFisica = $actividadFisica;
        return $this;
    }

    /**
     * @return string
     */
    public function getGustaHacer(): string
    {
        return $this->gustaHacer;
    }

    /**
     * @param string $gustaHacer
     * @return anamnesi
     */
    public function setGustaHacer(string $gustaHacer): anamnesi
    {
        $this->gustaHacer = $gustaHacer;
        return $this;
    }

    /**
     * @return string
     */
    public function getPondriaProposito(): string
    {
        return $this->pondriaProposito;
    }

    /**
     * @param string $pondriaProposito
     * @return anamnesi
     */
    public function setPondriaProposito(string $pondriaProposito): anamnesi
    {
        $this->pondriaProposito = $pondriaProposito;
        return $this;
    }

    /**
     * @return string
     */
    public function getDedicas(): string
    {
        return $this->dedicas;
    }

    /**
     * @param string $dedicas
     * @return anamnesi
     */
    public function setDedicas(string $dedicas): anamnesi
    {
        $this->dedicas = $dedicas;
        return $this;
    }

    /**
     * @return string
     */
    public function getHorario(): string
    {
        return $this->horario;
    }

    /**
     * @param string $horario
     * @return anamnesi
     */
    public function setHorario(string $horario): anamnesi
    {
        $this->horario = $horario;
        return $this;
    }

    /**
     * @return string
     */
    public function getDesplazamiento(): string
    {
        return $this->desplazamiento;
    }

    /**
     * @param string $desplazamiento
     * @return anamnesi
     */
    public function setDesplazamiento(string $desplazamiento): anamnesi
    {
        $this->desplazamiento = $desplazamiento;
        return $this;
    }

    /**
     * @return string
     */
    public function getDondeCome(): string
    {
        return $this->dondeCome;
    }

    /**
     * @param string $dondeCome
     * @return anamnesi
     */
    public function setDondeCome(string $dondeCome): anamnesi
    {
        $this->dondeCome = $dondeCome;
        return $this;
    }

    /**
     * @return string
     */
    public function getHorasDuerme(): string
    {
        return $this->horasDuerme;
    }

    /**
     * @param string $horasDuerme
     * @return anamnesi
     */
    public function setHorasDuerme(string $horasDuerme): anamnesi
    {
        $this->horasDuerme = $horasDuerme;
        return $this;
    }

    /**
     * @return string
     */
    public function getHabitosToxicos(): string
    {
        return $this->habitosToxicos;
    }

    /**
     * @param string $habitosToxicos
     * @return anamnesi
     */
    public function setHabitosToxicos(string $habitosToxicos): anamnesi
    {
        $this->habitosToxicos = $habitosToxicos;
        return $this;
    }

    /**
     * @return string
     */
    public function getDesayuno(): string
    {
        return $this->desayuno;
    }

    /**
     * @param string $desayuno
     * @return anamnesi
     */
    public function setDesayuno(string $desayuno): anamnesi
    {
        $this->desayuno = $desayuno;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlmuerzo(): string
    {
        return $this->almuerzo;
    }

    /**
     * @param string $almuerzo
     * @return anamnesi
     */
    public function setAlmuerzo(string $almuerzo): anamnesi
    {
        $this->almuerzo = $almuerzo;
        return $this;
    }

    /**
     * @return string
     */
    public function getComida(): string
    {
        return $this->comida;
    }

    /**
     * @param string $comida
     * @return anamnesi
     */
    public function setComida(string $comida): anamnesi
    {
        $this->comida = $comida;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerienda(): string
    {
        return $this->merienda;
    }

    /**
     * @param string $merienda
     * @return anamnesi
     */
    public function setMerienda(string $merienda): anamnesi
    {
        $this->merienda = $merienda;
        return $this;
    }

    /**
     * @return string
     */
    public function getCena(): string
    {
        return $this->cena;
    }

    /**
     * @param string $cena
     * @return anamnesi
     */
    public function setCena(string $cena): anamnesi
    {
        $this->cena = $cena;
        return $this;
    }

    /**
     * @return string
     */
    public function getCuestionarioFrecuencia(): string
    {
        return $this->cuestionarioFrecuencia;
    }

    /**
     * @param string $cuestionarioFrecuencia
     * @return anamnesi
     */
    public function setCuestionarioFrecuencia(string $cuestionarioFrecuencia): anamnesi
    {
        $this->cuestionarioFrecuencia = $cuestionarioFrecuencia;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreferencia(): string
    {
        return $this->preferencia;
    }

    /**
     * @param string $preferencia
     * @return anamnesi
     */
    public function setPreferencia(string $preferencia): anamnesi
    {
        $this->preferencia = $preferencia;
        return $this;
    }

    /**
     * @return string
     */
    public function getAversiones(): string
    {
        return $this->aversiones;
    }

    /**
     * @param string $aversiones
     * @return anamnesi
     */
    public function setAversiones(string $aversiones): anamnesi
    {
        $this->aversiones = $aversiones;
        return $this;
    }

    /**
     * @return string
     */
    public function getPicoteo(): string
    {
        return $this->picoteo;
    }

    /**
     * @param string $picoteo
     * @return anamnesi
     */
    public function setPicoteo(string $picoteo): anamnesi
    {
        $this->picoteo = $picoteo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCuantasVecesPicas(): string
    {
        return $this->cuantasVecesPicas;
    }

    /**
     * @param string $cuantasVecesPicas
     * @return anamnesi
     */
    public function setCuantasVecesPicas(string $cuantasVecesPicas): anamnesi
    {
        $this->cuantasVecesPicas = $cuantasVecesPicas;
        return $this;
    }

    /**
     * @return string
     */
    public function getCantidadPicas(): string
    {
        return $this->cantidadPicas;
    }

    /**
     * @param string $cantidadPicas
     * @return anamnesi
     */
    public function setCantidadPicas(string $cantidadPicas): anamnesi
    {
        $this->cantidadPicas = $cantidadPicas;
        return $this;
    }

    /**
     * @return string
     */
    public function getComesFuera(): string
    {
        return $this->comesFuera;
    }

    /**
     * @param string $comesFuera
     * @return anamnesi
     */
    public function setComesFuera(string $comesFuera): anamnesi
    {
        $this->comesFuera = $comesFuera;
        return $this;
    }

    /**
     * @return string
     */
    public function getCuantasVeces(): string
    {
        return $this->cuantasVeces;
    }

    /**
     * @param string $cuantasVeces
     * @return anamnesi
     */
    public function setCuantasVeces(string $cuantasVeces): anamnesi
    {
        $this->cuantasVeces = $cuantasVeces;
        return $this;
    }

    /**
     * @return string
     */
    public function getTipoComida(): string
    {
        return $this->tipoComida;
    }

    /**
     * @param string $tipoComida
     * @return anamnesi
     */
    public function setTipoComida(string $tipoComida): anamnesi
    {
        $this->tipoComida = $tipoComida;
        return $this;
    }

    /**
     * @return string
     */
    public function getMotivoComesFuera(): string
    {
        return $this->motivoComesFuera;
    }

    /**
     * @param string $motivoComesFuera
     * @return anamnesi
     */
    public function setMotivoComesFuera(string $motivoComesFuera): anamnesi
    {
        $this->motivoComesFuera = $motivoComesFuera;
        return $this;
    }

    /**
     * @return string
     */
    public function getRepitesPlato(): string
    {
        return $this->repitesPlato;
    }

    /**
     * @param string $repitesPlato
     * @return anamnesi
     */
    public function setRepitesPlato(string $repitesPlato): anamnesi
    {
        $this->repitesPlato = $repitesPlato;
        return $this;
    }

    /**
     * @return string
     */
    public function getTiempoComer(): string
    {
        return $this->tiempoComer;
    }

    /**
     * @param string $tiempoComer
     * @return anamnesi
     */
    public function setTiempoComer(string $tiempoComer): anamnesi
    {
        $this->tiempoComer = $tiempoComer;
        return $this;
    }

    /**
     * @return string
     */
    public function getHacerCompra(): string
    {
        return $this->hacerCompra;
    }

    /**
     * @param string $hacerCompra
     * @return anamnesi
     */
    public function setHacerCompra(string $hacerCompra): anamnesi
    {
        $this->hacerCompra = $hacerCompra;
        return $this;
    }

    /**
     * @return string
     */
    public function getGustaCocinar(): string
    {
        return $this->gustaCocinar;
    }

    /**
     * @param string $gustaCocinar
     * @return anamnesi
     */
    public function setGustaCocinar(string $gustaCocinar): anamnesi
    {
        $this->gustaCocinar = $gustaCocinar;
        return $this;
    }

    /**
     * @return string
     */
    public function getMientrasComes(): string
    {
        return $this->mientrasComes;
    }

    /**
     * @param string $mientrasComes
     * @return anamnesi
     */
    public function setMientrasComes(string $mientrasComes): anamnesi
    {
        $this->mientrasComes = $mientrasComes;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeso(): string
    {
        return $this->peso;
    }

    /**
     * @param string $peso
     * @return anamnesi
     */
    public function setPeso(string $peso): anamnesi
    {
        $this->peso = $peso;
        return $this;
    }

    /**
     * @return string
     */
    public function getTalla(): string
    {
        return $this->talla;
    }

    /**
     * @param string $talla
     * @return anamnesi
     */
    public function setTalla(string $talla): anamnesi
    {
        $this->talla = $talla;
        return $this;
    }

    /**
     * @return string
     */
    public function getCintura(): string
    {
        return $this->cintura;
    }

    /**
     * @param string $cintura
     * @return anamnesi
     */
    public function setCintura(string $cintura): anamnesi
    {
        $this->cintura = $cintura;
        return $this;
    }

    /**
     * @return string
     */
    public function getCadera(): string
    {
        return $this->cadera;
    }

    /**
     * @param string $cadera
     * @return anamnesi
     */
    public function setCadera(string $cadera): anamnesi
    {
        $this->cadera = $cadera;
        return $this;
    }

    /**
     * @return string
     */
    public function getTensionArterial(): string
    {
        return $this->tensionArterial;
    }

    /**
     * @param string $tensionArterial
     * @return anamnesi
     */
    public function setTensionArterial(string $tensionArterial): anamnesi
    {
        $this->tensionArterial = $tensionArterial;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodoMunyeca(): string
    {
        return $this->codoMunyeca;
    }

    /**
     * @param string $codoMunyeca
     * @return anamnesi
     */
    public function setCodoMunyeca(string $codoMunyeca): anamnesi
    {
        $this->codoMunyeca = $codoMunyeca;
        return $this;
    }

    /**
     * @return string
     */
    public function getResumen(): string
    {
        return $this->resumen;
    }

    /**
     * @param string $resumen
     * @return anamnesi
     */
    public function setResumen(string $resumen): anamnesi
    {
        $this->resumen = $resumen;
        return $this;
    }

    /**
     * @return string
     */
    public function getConclusiones(): string
    {
        return $this->conclusiones;
    }

    /**
     * @param string $conclusiones
     * @return anamnesi
     */
    public function setConclusiones(string $conclusiones): anamnesi
    {
        $this->conclusiones = $conclusiones;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrimeraImpresion(): string
    {
        return $this->primeraImpresion;
    }

    /**
     * @param string $primeraImpresion
     * @return anamnesi
     */
    public function setPrimeraImpresion(string $primeraImpresion): anamnesi
    {
        $this->primeraImpresion = $primeraImpresion;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjetivos(): string
    {
        return $this->objetivos;
    }

    /**
     * @param string $objetivos
     * @return anamnesi
     */
    public function setObjetivos(string $objetivos): anamnesi
    {
        $this->objetivos = $objetivos;
        return $this;
    }

    /**
     * @return string
     */
    public function getObservaciones(): string
    {
        return $this->observaciones;
    }

    /**
     * @param string $observaciones
     * @return anamnesi
     */
    public function setObservaciones(string $observaciones): anamnesi
    {
        $this->observaciones = $observaciones;
        return $this;
    }



}