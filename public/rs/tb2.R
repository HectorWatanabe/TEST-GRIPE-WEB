#Aplicacion Redes Bayesianas
library(prob)

args = commandArgs(trailingOnly=TRUE)

DolorCabeza <- data.frame(DolorCabeza=c('si','no'),probs=c(0.2,0.8))
Tos <- data.frame(Tos=c('esporadica','continua'),probs=c(0.9,0.1))
Fiebre <- data.frame(Fiebre=c('menor_a_39','mayor_a_39'),probs=c(0.7,0.3))
Escalofrios <- data.frame(Escalofrios=c('esporadicos','frecuentes'),probs=c(0.9,0.1))
DolorGarganta <- data.frame(DolorGarganta=c('pronunciado','leve'),probs=c(0.6,0.4))
DolorMuscular <- data.frame(DolorMuscular=c('moderado','intenso'),probs=c(0.7,0.3))
ArdorOjos <- data.frame(ArdorOjos=c('leve','intenso'),probs=c(0.8,0.2))
ProblemasRespiratorios <- expand.grid(DolorGarganta=c('pronunciado','leve'),Tos=c('esporadica','continua'),ProblemasRespiratorios=c('Alta','Moderada'))
Gripe <- expand.grid(DolorCabeza=c('si','no'),Fiebre=c('menor_a_39','mayor_a_39'),DolorMuscular=c('moderado','intenso'),ArdorOjos=c('leve','intenso'),Escalofrios=c('esporadicos','frecuentes'),ProblemasRespiratorios=c('Alta','Moderada'),Gripe=c('GripeComun','GripeAH1N1'))

Datos <- read.table(file = 'files/Datos1.txt')
Datos2 <- read.table(file = 'files/Datos2.txt')
ProblemasRespiratorios <- data.frame(ProblemasRespiratorios,Datos)
ProblemasRespiratorios <- probspace(ProblemasRespiratorios)
Gripe <- data.frame(Gripe,Datos2)
Gripe <- probspace(Gripe)

for(i in 1:length(ProblemasRespiratorios$V1))
{
  ProblemasRespiratorios$probs[i] = ProblemasRespiratorios$V1[i]/sum(ProblemasRespiratorios$V1)
}

for(i in 1:length(Gripe$V1))
{
  Gripe$probs[i] = Gripe$V1[i]/sum(Gripe$V1)
}

respuestas <- read.table(file = args[1])
respuesta1 <- as.character(respuestas[1,1])
respuesta2 <- as.character(respuestas[2,1])
respuesta3 <- as.character(respuestas[3,1])
respuesta4 <- as.character(respuestas[4,1])
respuesta5 <- as.character(respuestas[5,1])
respuesta6 <- as.character(respuestas[6,1])
respuesta7 <- as.character(respuestas[7,1])
respuesta8 <- as.character(respuestas[8,1])
respuesta9 <- as.character(respuestas[9,1])

Pgripe<-Prob(Gripe,Gripe==respuesta1,given=(DolorCabeza==respuesta2 & Fiebre==respuesta3 & DolorMuscular==respuesta4  & ArdorOjos==respuesta5 & Escalofrios==respuesta6))
Prespiratorios<-Prob(ProblemasRespiratorios,ProblemasRespiratorios==respuesta7,given = (DolorGarganta==respuesta8 & Tos==respuesta9))
Pdolorcabeza<-Prob(DolorCabeza,DolorCabeza==respuesta2)
Ptos<-Prob(Tos,Tos==respuesta9)
Pfiebre<-Prob(Fiebre,Fiebre==respuesta3)
Pescalofrios<-Prob(Escalofrios,Escalofrios==respuesta6)
Pdolorgarganta<-Prob(DolorGarganta,DolorGarganta==respuesta8)
Pdolormuscular<-Prob(DolorMuscular,DolorMuscular==respuesta4)
Pardorojos<-Prob(ArdorOjos,ArdorOjos==respuesta5)

Inferencia1 <- Pgripe*Prespiratorios*Pdolorcabeza*Ptos*Pfiebre*Pescalofrios*Pdolorgarganta*Pdolormuscular*Pardorojos
print(Inferencia1)